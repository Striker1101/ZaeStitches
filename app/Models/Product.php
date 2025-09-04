<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'discount_price',
        'brand_id',
        'weight',
        'status',
        'dimension',
        'material',
        'featured_image',
        'is_popular',
        'is_latest',
        'is_available',
        'rating',
        'hs_code'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',
        'discount_price' => 'decimal:2',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::creating(function ($product) {
            $product->slug = $product->slug ?? Str::slug($product->name);
        });
    }

    /**
     * Get the brand for the product.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    /**
     * Get the product variants for the product.
     */
    public function productVariants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * The tags that belong to the product.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag')->whereIn('type', ['product', 'both']);
        ;
    }

    /**
     * The categories that belong to the product.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category')->whereIn('type', ['product', 'both']);
        ;
    }

    /**
     * The comments that belong to the product.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    /**
     * The media that belong to the product.
     */
    public function media()
    {
        return $this->belongsToMany(Media::class, 'product_media')->whereIn('type', ['product', 'both']);
    }
}
