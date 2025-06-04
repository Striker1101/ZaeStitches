<x-layouts.app :title="__('Edit Variant')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Variant: {{ $variant->title }}</h1>

        <form action="{{ route('dashboard.variant.update', $variant) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Price --}}
            <label class="block mb-2">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $variant->price) }}" required
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Stock  --}}
            <label class="block mb-2">Stock</label>
            <input type="number" step="0.01" name="stock"
                value="{{ old('stock', $variant->stock) }}"
                class="w-full mb-4 border px-3 py-2 rounded" />

            {{-- Brand (select) --}}
            <label class="block mb-2">Product</label>
            <select name="product_id" required class="w-full mb-4 border px-3 py-2 rounded">
                <option value="">Select Product</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}"
                        {{ old('product_id', $variant->product_id) == $product->id ? 'selected' : '' }}>
                        {{ $product->title }}
                    </option>
                @endforeach
            </select>

            {{-- Brand (select) --}}
            <label class="block mb-2">Sizes</label>
            <select name="size_id" required class="w-full mb-4 border px-3 py-2 rounded">
                <option value="">Select Size</option>
                @foreach ($sizes as $size)
                    <option value="{{ $size->id }}"
                        {{ old('size_id', $variant->color_id) == $size->id ? 'selected' : '' }}>
                        {{ $size->name }}
                    </option>
                @endforeach
            </select>

            {{-- Brand (select) --}}
            <label class="block mb-2">Color</label>
            <select name="color_id" required class="w-full mb-4 border px-3 py-2 rounded">
                <option value="">Select Color</option>
                @foreach ($colors as $color)
                    <option value="{{ $color->id }}"
                        {{ old('color_id', $variant->color_id) == $color->id ? 'selected' : '' }}>
                        {{ $color->name }}
                    </option>
                @endforeach
            </select>


            <button type="submit" class="bg-green-600 text-white p-3  py- my-5 rounded hover:bg-green-700">Update
                Variant</button>
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
        <form action="{{ route('dashboard.variant.destroy', $variant) }}" method="POST"
            onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete
                Variant</button>
        </form>
    </div>
</x-layouts.app>
