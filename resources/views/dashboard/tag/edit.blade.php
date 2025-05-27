<x-layouts.app :title="__('Edit Tag')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Tag: {{ $tag->name }}</h1>

        <form action="{{ route('dashboard.tag.update', $tag) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <label class="block mb-2">Name
            <input type="text" name="name" value="{{ old('name', $tag->name) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <label class="block mb-2">Slug
            <input type="text" name="slug" value="{{ old('slug', $tag->slug) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>


            <label class="block mb-2">
    Type
    <select name="type" required
            class="w-full mb-4 border px-3 py-2 rounded">
        <option value="product" {{ old('type', $tag->type) === 'product' ? 'selected' : '' }}>
            Product
        </option>
        <option value="blog" {{ old('type', $tag->type) === 'blog' ? 'selected' : '' }}>
            Blog
        </option>
        <option value="both" {{ old('type', $tag->type) === 'both' ? 'selected' : '' }}>
            Both
        </option>
    </select>
</label>


            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Update Tag</button>
        </form>

        {{-- Delete button --}}
        <form action="{{ route('dashboard.tag.destroy', $tag) }}" method="POST" onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete Tag</button>
        </form>
    </div>
</x-layouts.app>
