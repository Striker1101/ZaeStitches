<?php
namespace App\Traits;

trait ProductTransformer
{
    public function transformProduct($product)
    {
        // your logic here
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
}
