<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ExtraController extends Controller
{
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

    private function transformProduct($product)
    {
        return [
            'id' => $product->id,
            'name' => $product->title,
            'slug' => $product->slug,
            'price' => $product->price,
            'discount_price' => $product->discount_price,
            'featured_image' => $product->featured_image ?? null,
            'description' => $product->description,
            'is_popular' => $product->is_popular,
            'is_latest' => $product->is_latest,
            'rating' => $product->rating,
            'status' => $product->status,
            'categories' => $product->categories->map(function ($cat) {
                return [
                    'id' => $cat->id,
                    'name' => $cat->name,
                    'slug' => $cat->slug,
                ];
            }),
            'tags' => $product->tags->map(function ($tag) {
                return [
                    'id' => $tag->id,
                    'name' => $tag->name,
                    'slug' => $tag->slug,
                ];
            }),
            'variants_count' => $product->productVariants->count(),
            'comments_count' => $product->comments->count(),
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
        ];
    }


    public function homepage(Request $request)
    {
        $categories = Category::take(5)->get();

        // 1. Popular Products (is_popular = true)
        $popularProducts = Product::with(['categories', 'tags', 'comments', 'productVariants', 'brand'])
            ->where('is_popular', true)
            ->latest()
            ->take(10)
            ->get()
            ->map(fn($product) => $this->transformProduct($product));

        // 2. Latest Products (is_latest = true OR latest by created_at)
        $latestProducts = Product::with(['categories', 'tags', 'comments', 'productVariants', 'brand'])
            ->where(function ($query) {
                $query->where('is_latest', true)
                    ->orWhere('created_at', '>=', now()->subDays(30)); // Or just order by created_at
            })
            ->latest()
            ->take(10)
            ->get()
            ->map(fn($product) => $this->transformProduct($product));

        $blogs = Blog::take(5)->get();

        return view('pages.home', compact('categories', 'latestProducts', 'popularProducts', 'blogs'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
