<x-layouts.app :title="__('Edit Blog')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Blog: {{ $blog->title }} </h1>
        <h1 class="text-2xl font-bold mb-6">Author: {{ $blog->user->name ?? 'Admin' }} </h1>

        <form action="{{ route('dashboard.blog.update', $blog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <label class="block mb-2">Title</label>
            <input type="text" name="title" value="{{ old('title', $blog->title) }}" required
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Slug (optional, readonly) --}}
            <label class="block mb-2">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $blog->slug) }}"
                class="w-full mb-4 border px-3 py-2 rounded" readonly />

            {{-- Description --}}
            <label class="block mb-2">Description</label>
            <textarea name="description" class="w-full mb-4 border px-3 py-2 rounded" rows="4">{{ old('description', $blog->description) }}</textarea>


            {{-- Content --}}
            <label class="block mb-2">Content</label>
            <textarea name="content" class="w-full mb-4 border px-3 py-2 rounded" rows="4">{{ old('content', $blog->content) }}</textarea>


            {{-- Discount Price --}}
            <label class="block mb-2">Duration</label>
            <input type="number" name="duration" value="{{ old('duration', $blog->duration) }}"
                class="w-full mb-4 border px-3 py-2 rounded" />


            {{-- Categories (multiple select) --}}
            <label class="block mb-2">Categories</label>
            <select name="categories[]" multiple class="w-full mb-4 border px-3 py-2 rounded" size="5">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ in_array($category->id, old('categories', $blog->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            {{-- Tags (multiple select) --}}
            <label class="block mb-2">Tags</label>
            <select name="tags[]" multiple class="w-full mb-4 border px-3 py-2 rounded" size="5">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                        {{ in_array($tag->id, old('tags', $blog->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>

            {{-- Status --}}
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full mb-4 border px-3 py-2 rounded" required>
                @foreach (['active', 'inactive', 'draft'] as $status)
                    <option value="{{ $status }}"
                        {{ old('status', $blog->status) === $status ? 'selected' : '' }}>
                        {{ ucfirst($status) }}
                    </option>
                @endforeach
            </select>

            {{-- Featured Image --}}
            <label class="block mb-2">Featured Image</label>
            <div id="featured-preview">
                @if ($blog->featured_image)
                    <img id="featured-img" src="{{ asset($blog->featured_image) }}" alt="Featured Image"
                        class="mb-4 max-h-32" />
                @endif
            </div>
            <label for="featured_image"> Featured Image
                <input type="file" name="featured_image" accept="image/*" class="mb-6"
                    onchange="previewFeaturedImage(this)" />
            </label>
            <br />

            <script>
                function previewFeaturedImage(input) {
                    if (input.files && input.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const imgTag = `<img src="${e.target.result}" alt="Featured Image" class="mb-4 max-h-32" />`;
                            document.getElementById('featured-preview').innerHTML = imgTag;
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>



            <label>Media Upload:
                <input type="file" name="media[]" id="media" class="form-control" multiple
                    accept="image/*,video/*">
                @error('media')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </label>
            <br />
            <button type="submit" class="bg-green-600 text-white p-3  py- my-5 rounded hover:bg-green-700">
                Update Blog
            </button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div class="text-red-500">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if (session('error'))
            <div class="text-red-500 alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


        @if (session('success'))
            <div class="alert alert-success text-green-500">
                {{ session('success') }}
            </div>
        @endif


        {{-- Media --}}
        <label class="block mb-2">Media</label>
        @if ($blog->media && $blog->media->count())
            <div class="flex flex-wrap gap-4 my-3">
                @foreach ($blog->media as $media)
                    <div class="relative max-w-xs">
                        @php
                            $ext = strtolower(pathinfo($media->url, PATHINFO_EXTENSION));
                            $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif']);
                        @endphp

                        @if ($isImage)
                            <img src="{{ asset($media->url) }}" alt="{{ asset($media->name) }}"
                                class="rounded border max-h-32" />
                        @else
                            <video src="{{ asset($media->url) }}" controls class="rounded border max-h-32"></video>
                        @endif

                        <form action="{{ route('dashboard.media.destroy', $media->id) }}" method="POST"
                            class="absolute top-0 right-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this media?')"
                                class="bg-red-500 text-white p-1 w-7 h-7 rounded-full hover:bg-red-700 absolute top-0 right-0">
                                &times;
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Delete button --}}
        <form action="{{ route('dashboard.blog.destroy', $blog) }}" method="POST"
            onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">
                Delete Blog
            </button>
        </form>
    </div>
</x-layouts.app>
