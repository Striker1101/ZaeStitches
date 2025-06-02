<?php

// App\Http\Controllers\ProductController.php
namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Media;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductVariant;
use App\Models\Size;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductController extends Controller
{

    /**
     * Display a listing of the resource (Dashboard).
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('dashboard.product.index', compact('products'));
    }

    public function pageIndex(Request $request)
    {
        $categories = Category::take(5)->get();

        // Reusable filter closure for products
        $applyProductFilters = function ($query) use ($request) {
            if ($request->filled('category'))
            {
                $query->whereHas('categories', fn($q) => $q->where('categories.id', $request->category));
            }
            if ($request->filled('tag'))
            {
                $query->whereHas('tags', fn($q) => $q->where('tags.id', $request->tag));
            }
            if ($request->filled('brand'))
            {
                $query->where('brand_id', $request->brand);
            }
            if ($request->filled('search'))
            {
                $query->where(
                    fn($q) =>
                    $q->where('name', 'like', "%{$request->search}%")
                        ->orWhere('description', 'like', "%{$request->search}%")
                );
            }
        };

        // Get filtered products with pagination
        $products = Product::with([
            'categories',
            'tags',
            'comments',
            'productVariants',
            'productVariants.size',
            'productVariants.color',
            'brand'
        ])
            ->where(fn($q) => $applyProductFilters($q))
            ->latest()
            ->paginate(20);

        // Get grouped brands with filtered products
        $brandsQuery = Brand::with([
            'products' => function ($query) use ($applyProductFilters) {
                $query->with(['categories', 'tags', 'comments', 'productVariants']);
                $applyProductFilters($query);
                $query->latest();
            }
        ]);

        if ($request->filled('brand'))
        {
            $brandsQuery->where('id', $request->brand);
        }

        $brands = $brandsQuery->get()
            ->filter(fn($brand) => $brand->products->isNotEmpty())
            ->map(function ($brand) {
                return [
                    'brand_id' => $brand->id,
                    'brand_name' => $brand->name,
                    'brand_slug' => $brand->slug,
                    'brand_logo' => $brand->logo,
                    'brand_description' => $brand->description,
                    'products_count' => $brand->products->count(),
                    'products' => $brand->products->map(fn($product) => [
                        'id' => $product->id,
                        'name' => $product->title,
                        'slug' => $product->slug,
                        'price' => $product->price,
                        'discount_price' => $product->discount_price,
                        'featured_image' => $product->featured_image,
                        'description' => $product->description,
                        'is_popular' => $product->is_popular,
                        'is_latest' => $product->is_latest,
                        'rating' => $product->rating,
                        'status' => $product->status,
                        'categories' => $product->categories->map(fn($cat) => [
                            'id' => $cat->id,
                            'name' => $cat->name,
                            'slug' => $cat->slug,
                        ])->toArray(),
                        'tags' => $product->tags->map(fn($tag) => [
                            'id' => $tag->id,
                            'name' => $tag->name,
                            'slug' => $tag->slug,
                        ])->toArray(),
                        'variants_count' => $product->productVariants->count(),
                        'comments_count' => $product->comments->count(),
                        'created_at' => $product->created_at,
                        'updated_at' => $product->updated_at,
                    ])->toArray(),
                ];
            })
            ->sortBy('brand_name')
            ->values();

        // Paginate grouped brands collection
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $paginatedBrands = new LengthAwarePaginator(
            $brands->forPage($currentPage, $perPage),
            $brands->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        $latestProducts = Product::with([
            'categories',
            'tags',
            'comments',
            'productVariants',
            'productVariants.size',
            'productVariants.color',
            'brand'
        ])
            ->latest()
            ->take(10)
            ->get()
            ->map(function ($product) {
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
                    'categories' => $product->categories->map(fn($cat) => [
                        'id' => $cat->id,
                        'name' => $cat->name,
                        'slug' => $cat->slug,
                    ]),
                    'tags' => $product->tags->map(fn($tag) => [
                        'id' => $tag->id,
                        'name' => $tag->name,
                        'slug' => $tag->slug,
                    ]),
                    'variants_count' => $product->productVariants->count(),
                    'comments_count' => $product->comments->count(),
                    'created_at' => $product->created_at,
                    'updated_at' => $product->updated_at,
                ];
            })
            ->toArray();

        return view('pages.shop.index', [
            'brandsWithProducts' => $paginatedBrands,
            'products' => $products,
            'categories' => $categories,
            'latestProducts' => $latestProducts
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::whereIn('type', ['product', 'both'])->get();
        $tags = Tag::whereIn('type', ['product', 'both'])->get();

        return view('dashboard.product.create', compact('brands', 'categories', 'tags'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try
        {
            // Handle featured image
            $featuredImagePath = null;
            if ($request->hasFile('featured_image'))
            {
                $image = $request->file('featured_image');
                $path = $image->store('uploads/products', 'public');
                $featuredImagePath = '/storage/' . $path;
            }

            // Create product
            $productData = $request->validated();
            $productData['featured_image'] = $featuredImagePath;
            $product = Product::create($productData);

            // Attach categories
            if ($request->has('categories'))
            {
                $product->categories()->attach($request->input('categories'));
            }

            // Attach tags
            if ($request->has('tags'))
            {
                $product->tags()->attach($request->input('tags'));
            }

            // Save media files (gallery)
            if ($request->hasFile('media'))
            {
                foreach ($request->file('media') as $mediaFile)
                {
                    $mediaPath = $mediaFile->store('uploads/products/media', 'public');

                    $media = Media::create([
                        'name' => $mediaFile->getClientOriginalName(),
                        'url' => '/storage/' . $mediaPath,
                        'type' => 'product',
                        'mime_type' => $mediaFile->getMimeType(),
                        'size' => round($mediaFile->getSize() / 1024, 2) . 'KB',
                        'extension' => $mediaFile->getClientOriginalExtension(),
                    ]);

                    $product->media()->attach($media->id);
                }
            }

            return redirect()->route('dashboard.product.index')->with('success', 'Product created successfully.');
        } catch (\Exception $e)
        {
            return redirect()->back()->withInput()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource (Dashboard).
     */
    public function show(Product $product)
    {
        return view('dashboard.product.show', compact('product'));
    }

    /**
     * Display the specified resource (Public page).
     */
    public function pageShow(Product $product)
    {
        // Load relationships for public view
        $product->load([
            'brand',
            'productVariants',
            'productVariants.size',
            'productVariants.color',
            'tags',
            'categories',
            'comments',
            'media'
        ]);

        // Next product (by ID or created_at)
        $nextProduct = Product::where('id', '>', $product->id)
            ->orderBy('id')
            ->first();

        // Previous product
        $prevProduct = Product::where('id', '<', $product->id)
            ->orderByDesc('id')
            ->first();

        // Latest products list
        $latestProducts = Product::with([
            'categories',
            'tags',
            'comments',
            'productVariants',
            'productVariants.size',
            'productVariants.color',
            'brand'
        ])
            ->latest()
            ->take(10)
            ->get()
            ->map(function ($product) {
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
                    'categories' => $product->categories->map(fn($cat) => [
                        'id' => $cat->id,
                        'name' => $cat->name,
                        'slug' => $cat->slug,
                    ]),
                    'tags' => $product->tags->map(fn($tag) => [
                        'id' => $tag->id,
                        'name' => $tag->name,
                        'slug' => $tag->slug,
                    ]),
                    'variants_count' => $product->productVariants->count(),
                    'comments_count' => $product->comments->count(),
                    'created_at' => $product->created_at,
                    'updated_at' => $product->updated_at,
                ];
            })
            ->toArray();

        $variantPrices = $product->productVariants->map(function ($variant) {
            return [
                'size' => $variant->size->name ?? null,
                'color' => $variant->color->name ?? null,
                'price' => $variant->price,
                'stock' => $variant->stock,
            ];
        });

        return view('pages.shop.show', compact('product', 'latestProducts', 'nextProduct', 'prevProduct', 'variantPrices'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product->load('media');
        $brands = Brand::all();
        $categories = Category::whereIn('type', ['product', 'both'])->get();
        $tags = Tag::whereIn('type', ['product', 'both'])->get();

        return view('dashboard.product.edit', compact('product', 'brands', 'categories', 'tags'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try
        {
            $productData = $request->validated();

            // Handle featured image
            if ($request->hasFile('featured_image'))
            {
                // Delete old featured image if exists
                if ($product->featured_image && \Storage::disk('public')->exists(str_replace('/storage/', '', $product->featured_image)))
                {
                    \Storage::disk('public')->delete(str_replace('/storage/', '', $product->featured_image));
                }

                $image = $request->file('featured_image');
                $path = $image->store('uploads/products', 'public');
                $productData['featured_image'] = '/storage/' . $path; // ✅ Store proper path here
            }

            // Update product data
            $product->update($productData);

            // Sync categories
            if ($request->has('categories'))
            {
                $product->categories()->sync($request->input('categories'));
            }

            // Sync tags
            if ($request->has('tags'))
            {
                $product->tags()->sync($request->input('tags'));
            }

            // Handle new media files (gallery)
            if ($request->hasFile('media'))
            {
                foreach ($request->file('media') as $mediaFile)
                {
                    $mediaPath = $mediaFile->store('uploads/products/media', 'public');

                    $media = Media::create([
                        'name' => $mediaFile->getClientOriginalName(),
                        'url' => '/storage/' . $mediaPath,
                        'type' => 'product',
                        'mime_type' => $mediaFile->getMimeType(),
                        'size' => round($mediaFile->getSize() / 1024, 2) . 'KB',
                        'extension' => $mediaFile->getClientOriginalExtension(),
                    ]);

                    $product->media()->attach($media->id);
                }
            }

            return redirect()->back()->with('success', 'Product updated successfully.');
        } catch (\Exception $e)
        {
            return redirect()->back()->withInput()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Detach relationships to prevent orphan relations
        $product->categories()->detach();
        $product->tags()->detach();
        $product->comments()->delete();
        $product->media()->detach();

        // Delete featured image file
        if ($product->featured_image)
        {
            \Storage::disk('public')->delete($product->featured_image);
        }

        $product->delete();

        return redirect()->route('dashboard.product.index')->with('success', 'Product deleted successfully.');
    }

    private function getProductsGroupedByBrand(Request $request)
    {
        $brands = Brand::with([
            'products' => function ($query) use ($request) {
                // Eager load related models
                $query->with(['categories', 'tags', 'comments', 'productVariants']);

                // Apply filters to products
                if ($request->has('category'))
                {
                    $query->whereHas('categories', function ($q) use ($request) {
                        $q->where('categories.name', $request->category);
                    });
                }

                if ($request->has('tag'))
                {
                    $query->whereHas('tags', function ($q) use ($request) {
                        $q->where('tags.name', $request->tag);
                    });
                }

                if ($request->has('search'))
                {
                    $query->where(function ($q) use ($request) {
                        $q->where('name', 'like', '%' . $request->search . '%')
                            ->orWhere('description', 'like', '%' . $request->search . '%');
                    });
                }

                // Optional: apply status/visibility filters
                $query->latest();
            }
        ]);

        // If filtering by a specific brand
        if ($request->has('brand'))
        {
            $brands->where('name', $request->brand);
        }

        $brands = $brands->get();

        $result = [];

        foreach ($brands as $brand)
        {
            // Skip if no products found after filtering
            if ($brand->products->isEmpty())
                continue;

            $result[] = [
                'brand_id' => $brand->id,
                'brand_name' => $brand->name,
                'brand_slug' => $brand->slug,
                'brand_logo' => $brand->logo,
                'brand_description' => $brand->description,
                'products_count' => $brand->products->count(),
                'products' => $brand->products->map(function ($product) {
                    return [
                        'id' => $product->id,
                        'name' => $product->name,
                        'slug' => $product->slug,
                        'price' => $product->price,
                        'discount_price' => $product->discount_price,
                        'featured_image' => $product->featured_image,
                        'description' => $product->description,
                        'is_popular' => $product->is_popular,
                        'is_latest' => $product->is_latest,
                        'rating' => $product->rating,
                        'status' => $product->status,
                        'categories' => $product->categories->map(fn($category) => [
                            'id' => $category->id,
                            'name' => $category->name,
                            'slug' => $category->slug,
                        ])->toArray(),
                        'tags' => $product->tags->map(fn($tag) => [
                            'id' => $tag->id,
                            'name' => $tag->name,
                            'slug' => $tag->slug,
                        ])->toArray(),
                        'variants_count' => $product->productVariants->count(),
                        'comments_count' => $product->comments->count(),
                        'created_at' => $product->created_at,
                        'updated_at' => $product->updated_at,
                    ];
                })->toArray(),
            ];
        }

        return collect($result)->sortBy('brand_name')->values();
    }


}

