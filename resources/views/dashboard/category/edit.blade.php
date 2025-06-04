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
                <input type="text" name="description" value="{{ old('description', $category->description) }}"
                    required class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <label class="block mb-2">
                Type
                <select name="type" required class="w-full mb-4 border px-3 py-2 rounded">
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



            {{-- Image --}}
            <label class="block mb-2"> Image</label>
            <div id="logo-preview">
                @if ($category->image)
                    <img id="logo-img" src="{{ asset($category->image) }}" alt=" Image" class="mb-4 max-h-32" />
                @endif
            </div>
            <input type="file" name="image" accept="image/*" class="mb-6"
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
                Category</button>
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



        {{-- Delete button --}}
        <form action="{{ route('dashboard.category.destroy', $category) }}" method="POST"
            onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete
                Category</button>
        </form>
    </div>
</x-layouts.app>
