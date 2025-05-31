<x-layouts.app :title="__('Edit Product')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Product: {{ $product->title }}</h1>

        <form action="{{ route('dashboard.product.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <label class="block mb-2">Title</label>
            <input type="text" name="title" value="{{ old('title', $product->title) }}" required
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Slug (optional, readonly) --}}
            <label class="block mb-2">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $product->slug) }}"
                class="w-full mb-4 border px-3 py-2 rounded" readonly />

            {{-- Description --}}
            <label class="block mb-2">Description</label>
            <textarea name="description" class="w-full mb-4 border px-3 py-2 rounded" rows="4">{{ old('description', $product->description) }}</textarea>

            {{-- Price --}}
            <label class="block mb-2">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Discount Price --}}
            <label class="block mb-2">Discount Price</label>
            <input type="number" step="0.01" name="discount_price"
                value="{{ old('discount_price', $product->discount_price) }}"
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Brand (select) --}}
            <label class="block mb-2">Brand</label>
            <select name="brand_id" required class="w-full mb-4 border px-3 py-2 rounded">
                <option value="">Select Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}"
                        {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>

            {{-- Categories (multiple select) --}}
            <label class="block mb-2">Categories</label>
            <select name="categories[]" multiple class="w-full mb-4 border px-3 py-2 rounded" size="5">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ in_array($category->id, old('categories', $product->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            {{-- Tags (multiple select) --}}
            <label class="block mb-2">Tags</label>
            <select name="tags[]" multiple class="w-full mb-4 border px-3 py-2 rounded" size="5">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                        {{ in_array($tag->id, old('tags', $product->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>

            {{-- Weight --}}
            <label class="block mb-2">Weight</label>
            <input type="text" name="weight" value="{{ old('weight', $product->weight) }}"
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Dimension --}}
            <label class="block mb-2">Dimension</label>
            <input type="text" name="dimension" value="{{ old('dimension', $product->dimension) }}"
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Material --}}
            <label class="block mb-2">Material</label>
            <input type="text" name="material" value="{{ old('material', $product->material) }}"
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Rating --}}
            <label class="block mb-2">Rating</label>
            <input type="number" step="0.1" max="5" min="0" name="rating"
                value="{{ old('rating', $product->rating) }}" class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Status --}}
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full mb-4 border px-3 py-2 rounded" required>
                @foreach (['active', 'inactive', 'draft'] as $status)
                    <option value="{{ $status }}"
                        {{ old('status', $product->status) === $status ? 'selected' : '' }}>
                        {{ ucfirst($status) }}
                    </option>
                @endforeach
            </select>

            {{-- Is Popular --}}
            <label class="inline-flex items-center mb-4">
                <input type="checkbox" name="is_popular" value="1"
                    {{ old('is_popular', $product->is_popular) ? 'checked' : '' }} class="mr-2" />
                Popular
            </label>

            {{-- Is Latest --}}
            <label class="inline-flex items-center mb-4">
                <input type="checkbox" name="is_latest" value="1"
                    {{ old('is_latest', $product->is_latest) ? 'checked' : '' }} class="mr-2" />
                Latest
            </label>


            {{-- Is Latest --}}
            <label class="inline-flex items-center mb-4">
                <input type="checkbox" name="is_available" value="1"
                    {{ old('is_available', $product->is_available) ? 'checked' : '' }} class="mr-2" />
                Available
            </label>

            {{-- Featured Image --}}
            <label class="block mb-2">Featured Image</label>
            <div id="featured-preview">
                @if ($product->featured_image)
                    <img id="featured-img" src="{{ asset($product->featured_image) }}" alt="Featured Image"
                        class="mb-4 max-h-32" />
                @endif
            </div>
            <input type="file" name="featured_image" accept="image/*" class="mb-6"
                onchange="previewFeaturedImage(this)" />

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


            {{-- Media --}}
            <label class="block mb-2">Media</label>
            @if ($product->media && $product->media->count())
                <div class="flex flex-wrap gap-4 my-3">
                    @foreach ($product->media as $media)
                        <div class="relative max-w-xs">
                            @php
                                $ext = strtolower(pathinfo($media->url, PATHINFO_EXTENSION));
                                $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif']);
                            @endphp

                            @if ($isImage)
                                <img src="{{ asset($media->url) }}" alt="{{ asset($media->name) }}"
                                    class="rounded border max-h-32" />
                            @else
                                <video src="{{ asset($media->url) }}" controls
                                    class="rounded border max-h-32"></video>
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

            <input type="file" name="media[]" id="media" class="form-control" multiple
                accept="image/*,video/*">
            @error('media')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
            <br>
            <button type="submit" class="bg-green-600 text-white p-3  py- my-5 rounded hover:bg-green-700">Update
                Product</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div class="text-red-500">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success text-green-500">
                {{ session('success') }}
            </div>
        @endif

        {{-- Delete button --}}
        <form action="{{ route('dashboard.product.destroy', $product) }}" method="POST"
            onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete
                Product</button>
        </form>
    </div>
</x-layouts.app>
