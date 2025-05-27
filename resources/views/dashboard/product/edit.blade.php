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
            <input type="text" name="slug" value="{{ old('slug', $product->slug) }}" class="w-full mb-4 border px-3 py-2 rounded" readonly />

            {{-- Description --}}
            <label class="block mb-2">Description</label>
            <textarea name="description" class="w-full mb-4 border px-3 py-2 rounded" rows="4">{{ old('description', $product->description) }}</textarea>

            {{-- Price --}}
            <label class="block mb-2">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Discount Price --}}
            <label class="block mb-2">Discount Price</label>
            <input type="number" step="0.01" name="discount_price" value="{{ old('discount_price', $product->discount_price) }}"
                   class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Brand (select) --}}
            <label class="block mb-2">Brand</label>
            <select name="brand_id" required class="w-full mb-4 border px-3 py-2 rounded">
                <option value="">Select Brand</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ (old('brand_id', $product->brand_id) == $brand->id) ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>

            {{-- Categories (multiple select) --}}
            <label class="block mb-2">Categories</label>
            <select name="categories[]" multiple class="w-full mb-4 border px-3 py-2 rounded" size="5">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ in_array($category->id, old('categories', $product->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            {{-- Tags (multiple select) --}}
            <label class="block mb-2">Tags</label>
            <select name="tags[]" multiple class="w-full mb-4 border px-3 py-2 rounded" size="5">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}"
                        {{ in_array($tag->id, old('tags', $product->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>

            {{-- Weight --}}
            <label class="block mb-2">Weight</label>
            <input type="text" name="weight" value="{{ old('weight', $product->weight) }}" class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Dimension --}}
            <label class="block mb-2">Dimension</label>
            <input type="text" name="dimension" value="{{ old('dimension', $product->dimension) }}" class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Material --}}
            <label class="block mb-2">Material</label>
            <input type="text" name="material" value="{{ old('material', $product->material) }}" class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Rating --}}
            <label class="block mb-2">Rating</label>
            <input type="number" step="0.1" max="5" min="0" name="rating" value="{{ old('rating', $product->rating) }}" class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Status --}}
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full mb-4 border px-3 py-2 rounded" required>
                @foreach(['active', 'inactive', 'draft'] as $status)
                    <option value="{{ $status }}" {{ old('status', $product->status) === $status ? 'selected' : '' }}>
                        {{ ucfirst($status) }}
                    </option>
                @endforeach
            </select>

            {{-- Is Popular --}}
            <label class="inline-flex items-center mb-4">
                <input type="checkbox" name="is_popular" value="1" {{ old('is_popular', $product->is_popular) ? 'checked' : '' }} class="mr-2" />
                Popular
            </label>

            {{-- Is Latest --}}
            <label class="inline-flex items-center mb-4">
                <input type="checkbox" name="is_latest" value="1" {{ old('is_latest', $product->is_latest) ? 'checked' : '' }} class="mr-2" />
                Latest
            </label>

            {{-- Featured Image --}}
            <label class="block mb-2">Featured Image</label>
            @if($product->featured_image)
                <img src="{{ asset('storage/' . $product->featured_image) }}" alt="Featured Image" class="mb-4 max-h-32" />
            @endif
            <input type="file" name="featured_image" accept="image/*" class="mb-6" />

            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Update Product</button>
        </form>

        {{-- Delete button --}}
        <form action="{{ route('dashboard.product.destroy', $product) }}" method="POST" onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete Product</button>
        </form>
    </div>
</x-layouts.app>
