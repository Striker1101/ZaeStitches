<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Models\Media;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $medias = Media::latest()->paginate(10);
        return view('dashboard.media.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediaRequest $request)
    {
        //
        $media = Media::create($request->validated());
        return redirect()->route('dashboard.media.index')->with('success', 'Media posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        //
        return view('dashboard.media.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediaRequest $request, Media $media)
    {
        $data = $request->validated();

        if ($request->hasFile('file'))
        {
            // Delete old file (strip 'storage/' prefix)
            $oldPath = Str::after($media->url, 'storage/');
            \Storage::disk('public')->delete($oldPath);

            // Store new file on the 'public' disk
            $path = $request->file('file')->store('media', 'public');
            $file = $request->file('file');

            // Update URL and metadata
            $data['url'] = 'storage/' . $path;
            $data['mime_type'] = $file->getMimeType();
            $data['size'] = $file->getSize();
            $data['extension'] = $file->getClientOriginalExtension();
        }

        $media->update($data);

        return redirect()
            ->route('dashboard.media.index')
            ->with('success', 'Media updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        //
        $media->delete();
        return redirect()->route('dashboard.media.index')->with('success', 'Media deleted successfully.');
    }
}
