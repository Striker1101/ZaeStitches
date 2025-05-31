<x-layouts.app :title="__('Edit Brand')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Brand: {{ $brand->name }}</h1>

        <form action="{{ route('dashboard.brand.update', $brand) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <label class="block mb-2">Name
                <input type="text" name="name" value="{{ old('name', $brand->name) }}" required
                    class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <label class="block mb-2">Slug
                <input type="text" name="slug" value="{{ old('slug', $brand->slug) }}" required
                    class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <label class="block mb-2">Description
                <input type="text" name="description" value="{{ old('description', $brand->description) }}" required
                    class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            {{-- Logo Image --}}
            <label class="block mb-2">Logo Image</label>
            <div id="logo-preview">
                @if ($brand->logo)
                    <img id="logo-img" src="{{ asset($brand->logo) }}" alt="Logo Image" class="mb-4 max-h-32" />
                @endif
            </div>
            <input type="file" name="logo" accept="image/*" class="mb-6"
                onchange="previewFeaturedImage(this)" />

            <script>
                function previewFeaturedImage(input) {
                    if (input.files && input.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const imgTag = `<img src="${e.target.result}" alt="logo Image" class="mb-4 max-h-32" />`;
                            document.getElementById('logo-preview').innerHTML = imgTag;
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            <br>
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Update
                Brand</button>
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
        <form action="{{ route('dashboard.brand.destroy', $brand) }}" method="POST"
            onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete
                Brand</button>
        </form>
    </div>
</x-layouts.app>
