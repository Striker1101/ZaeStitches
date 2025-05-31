<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Media;
use App\Models\Tag;
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
        $categories = Category::whereIn('type', ['blog', 'both'])->get();
        $tags = Tag::whereIn('type', ['blog', 'both'])->get();
        return view('dashboard.blog.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        try
        {
            // Handle featured image
            $featuredImagePath = null;
            if ($request->hasFile('featured_image'))
            {
                $image = $request->file('featured_image');
                $path = $image->store('uploads/blogs', 'public');
                $featuredImagePath = '/storage/' . $path;
            }

            // Create blog
            $blogData = $request->validated();
            $blogData['featured_image'] = $featuredImagePath;
            $blog = Blog::create($blogData);

            // Attach categories
            if ($request->has('categories'))
            {
                $blog->categories()->attach($request->input('categories'));
            }

            // Attach tags
            if ($request->has('tags'))
            {
                $blog->tags()->attach($request->input('tags'));
            }

            // Save media files (gallery)
            if ($request->hasFile('media'))
            {
                foreach ($request->file('media') as $mediaFile)
                {
                    $mediaPath = $mediaFile->store('uploads/blogs/media', 'public');

                    $media = Media::create([
                        'name' => $mediaFile->getClientOriginalName(),
                        'url' => '/storage/' . $mediaPath,
                        'type' => 'blog',
                        'mime_type' => $mediaFile->getMimeType(),
                        'size' => round($mediaFile->getSize() / 1024, 2) . 'KB',
                        'extension' => $mediaFile->getClientOriginalExtension(),
                    ]);

                    $blog->media()->attach($media->id);
                }
            }

            return redirect()->route('dashboard.blog.index')->with('success', 'Blog created successfully.');
        } catch (\Exception $e)
        {
            return redirect()->back()->withInput()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
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
        $blog->load('media');
        $categories = Category::whereIn('type', ['blog', 'both'])->get();
        $tags = Tag::whereIn('type', ['blog', 'both'])->get();
        return view('dashboard.blog.edit', compact('blog', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        try
        {
            $blogData = $request->validated();

            // Handle featured image
            if ($request->hasFile('featured_image'))
            {
                // Delete old featured image if exists
                if ($blog->featured_image && \Storage::disk('public')->exists(str_replace('/storage/', '', $blog->featured_image)))
                {
                    \Storage::disk('public')->delete(str_replace('/storage/', '', $blog->featured_image));
                }

                $image = $request->file('featured_image');
                $path = $image->store('uploads/blogs', 'public');
                $blogData['featured_image'] = '/storage/' . $path; // ✅ Store proper path here
            }

            // Update blog data
            $blog->update($blogData);

            // Sync categories
            if ($request->has('categories'))
            {
                $blog->categories()->sync($request->input('categories'));
            }

            // Sync tags
            if ($request->has('tags'))
            {
                $blog->tags()->sync($request->input('tags'));
            }

            // Handle new media files (gallery)
            if ($request->hasFile('media'))
            {
                foreach ($request->file('media') as $mediaFile)
                {
                    $mediaPath = $mediaFile->store('uploads/blogs/media', 'public');

                    $media = Media::create([
                        'name' => $mediaFile->getClientOriginalName(),
                        'url' => '/storage/' . $mediaPath,
                        'type' => 'blog',
                        'mime_type' => $mediaFile->getMimeType(),
                        'size' => round($mediaFile->getSize() / 1024, 2) . 'KB',
                        'extension' => $mediaFile->getClientOriginalExtension(),
                    ]);

                    $blog->media()->attach($media->id);
                }
            }

            return redirect()->back()->with('success', 'Blog updated successfully.');
        } catch (\Exception $e)
        {
            return redirect()->back()->withInput()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->categories()->detach();
        $blog->tags()->detach();
        $blog->comments()->detach();
        $blog->media()->detach();

        // Delete featured image file
        if ($blog->featured_image)
        {
            \Storage::disk('public')->delete($blog->featured_image);
        }

        $blog->delete();
        return redirect()->route('dashboard.blog.index')->with('success', 'Blog deleted successfully.');
    }
}
