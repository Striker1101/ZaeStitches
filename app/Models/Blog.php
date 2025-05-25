<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'duration',
        'featured_image',
        'status',
        'user_id', // the author
    ];

    // 🧠 Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_category');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function media()
    {
        return $this->belongsToMany(Media::class)->whereIn('type', ['blog', 'both']);
    }
}
