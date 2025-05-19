<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $blogs = Blog::all();
        $products = Product::all();
        foreach ($blogs as $blog)
        {
            Comment::factory(2)->create([
                'commentable_id' => $blog->id,
                'commentable_type' => Blog::class,
            ]);
        }

        foreach ($products as $product)
        {
            Comment::factory(3)->create([
                'commentable_id' => $product->id,
                'commentable_type' => Product::class,
            ]);
        }
    }
}
