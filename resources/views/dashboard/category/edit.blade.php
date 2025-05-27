<x-layouts.app :title="__('Edit Category')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Category: {{ $category->name }}</h1>

        <form action="{{ route('dashboard.category.update', $category) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <label class="block mb-2">Name
            <input type="text" name="name" value="{{ old('name', $category->name) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <label class="block mb-2">Slug
            <input type="text" name="slug" value="{{ old('slug', $category->slug) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <label class="block mb-2">Description
            <input type="text" name="description" value="{{ old('description', $category->description) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <label class="block mb-2">
    Type
    <select name="type" required
            class="w-full mb-4 border px-3 py-2 rounded">
        <option value="product" {{ old('type', $category->type) === 'product' ? 'selected' : '' }}>
            Product
        </option>
        <option value="blog" {{ old('type', $category->type) === 'blog' ? 'selected' : '' }}>
            Blog
        </option>
        <option value="both" {{ old('type', $category->type) === 'both' ? 'selected' : '' }}>
            Both
        </option>
    </select>
</label>


            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Update Category</button>
        </form>

        {{-- Delete button --}}
        <form action="{{ route('dashboard.category.destroy', $category) }}" method="POST" onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete Category</button>
        </form>
    </div>
</x-layouts.app>
