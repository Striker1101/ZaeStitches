<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('dashboard.blog.index', compact('blogs'));
    }

    public function pageIndex(Request $request)
    {
        $query = Blog::with(['categories', 'tags', 'comments', 'user']);
        $categories = Category::take(5)->get();

        if ($request->has('category'))
        {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('categories.id', $request->category);
            });
        }

        $blogs = $query->latest()->paginate(10);

        return view('pages.blog.index', compact('blogs', 'categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = Blog::create($request->validated());
        return redirect()->route('dashboard.blog.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {

        return view('dashboard.blog.show', compact('blog'));
    }

    public function pageShow(Blog $blog)
    {
        $blog->load([
            'tags',
            'categories',
            'comments',
            'media',
            'user'
        ]);

        $previous = Blog::where('id', '<', $blog->id)->latest('id')->first();
        $next = Blog::where('id', '>', $blog->id)->oldest('id')->first();

        return view('pages.blog.show', compact('blog', 'previous', 'next'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update($request->validated());
        return redirect()->route('dashboard.blog.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('dashboard.blog.index')->with('success', 'Blog deleted successfully.');
    }
}
