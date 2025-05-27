<x-layouts.app :title="__('Edit Product')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Size: {{ $size->name }}</h1>

        <form action="{{ route('dashboard.size.update', $size) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <label class="block mb-2">Name</label>
            <input type="text" name="name" value="{{ old('name', $size->name) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Update Size</button>
        </form>

        {{-- Delete button --}}
        <form action="{{ route('dashboard.size.destroy', $size) }}" method="POST" onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete Size</button>
        </form>
    </div>
</x-layouts.app>
