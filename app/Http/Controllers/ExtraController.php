<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Extra;
use App\Models\Product;
use App\Traits\ProductTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ExtraController extends Controller
{
    use ProductTransformer;
    /**
     * Display a listing of the resource.
     */
    public function subscribe(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        DB::table('newsletter_subscribers')->insert([
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Subscribed successfully']);
    }

    public function homepage(Request $request)
    {
        $categories = Category::take(5)->get();
        $extra = Extra::first();

        // 1. Popular Products (is_popular = true)
        $popularProducts = Product::with(['categories', 'tags', 'comments', 'productVariants', 'productVariants.size', 'productVariants.color', 'brand'])
            ->where('is_popular', true)
            ->latest()
            ->take(10)
            ->get()
            ->map(fn($product) => $this->transformProduct($product));

        // 2. Latest Products (is_latest = true OR latest by created_at)
        $latestProducts = Product::with(['categories', 'tags', 'comments', 'productVariants', 'productVariants.size', 'productVariants.color', 'brand'])
            ->where(function ($query) {
                $query->where('is_latest', true)->orWhere('created_at', '>=', now()->subDays(30)); // Or just order by created_at
            })
            ->latest()
            ->take(10)
            ->get()
            ->map(fn($product) => $this->transformProduct($product));

        $blogs = Blog::take(5)->get();
        $currencies = Currency::all();

        return view('pages.home', compact('categories', 'latestProducts', 'popularProducts', 'blogs', 'extra'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function getCost(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
        ]);

        // dd(env('DHL_USERNAME'), env('DHL_PASSWORD'),env('DHL_BASE_URL'));

        try {
            $query = [
                'accountNumber' => env('DHL_ACCOUNT_NUMBER'),
                'originCountryCode' => 'NG',
                'originCityName' => 'Lagos',
                'destinationCountryCode' => $validated['country'],
                'destinationCityName' => $validated['city'],
                'weight' => 1,
                'length' => 10,
                'width' => 10,
                'height' => 10,
                'plannedShippingDate' => now()->addDay()->toDateString(),
                'isCustomsDeclarable' => 'false',
                'unitOfMeasurement' => 'metric',
            ];

            $response = Http::withHeaders([
                'Message-Reference' => (string) Str::uuid(),
                'Message-Reference-Date' => now()->toIso8601String(),
                'Plugin-Name' => 'MyShippingPlugin',
                'Plugin-Version' => '1.0.0',
                'Shipping-System-Platform-Name' => 'Laravel',
                'Shipping-System-Platform-Version' => app()->version(),
                'Webstore-Platform-Name' => 'Jiconstruct',
                'Webstore-Platform-Version' => '1.0.0',
                'Authorization' => 'Basic ' . base64_encode(env('DHL_USERNAME') . ':' . env('DHL_PASSWORD')),
            ])
                ->withoutVerifying()
                ->get(env('DHL_BASE_URL') . '/rates', $query);

            if ($response->failed()) {
                 $responseJson = $response->json();

                return response()->json(
                    [
                        'error' => $responseJson['detail'] ??  'Failed to fetch shipping rate',
                        'status' => $response->status(),
                        'body' => $response->body(),
                        'json' => $response->json(),
                    ],
                    400,
                );
            }

            return response()->json(['rates' => $response->json()]);
        } catch (\Throwable $e) {
            return response()->json(
                [
                    'error' => 'Shipping cost request failed',
                    'message' => $e->getMessage(),
                ],
                500,
            );
        }
    }
}
