<x-layouts.app :title="__('Create Product')">
    <div class="container py-4 text-gray-400">
        <h1 class="mb-4">Create Product</h1>

        <form action="{{ route('dashboard.variant.store') }}" method="POST" enctype="multipart/form-data"
            class="needs-validation text-gray-400" novalidate>
            @csrf



            {{-- Relationships --}}
            <div class="mb-4 border p-3 rounded ">
                <h5>Associations</h5>

                <div class="mb-3 w-full">
                    <label for="product_id" class="form-label">Product *</label>
                    <br>
                    <select name="product_id" id="product_id" class="form-select" required>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}"
                                {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                {{ $product->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('product_id')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <div class="mb-3 ">
                        <label for="size_id" class="form-label">Sizes</label>
                        <br>
                        <select name="size_id" id="size_id" class="form-select">
                            @foreach ($sizes as $size)
                                <option value="{{ $size->id }}" {{ old('size_id') == $size->id ? 'selected' : '' }}>
                                    {{ $size->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('sizes')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="color_id" class="form-label">Colors</label>
                        <br>
                        <select name="color_id" id="color_id" class="form-select" >
                            @foreach ($colors as $color)
                                <option value="{{ $color->id }}" {{ old('color_id') == $color->id ? 'selected' : '' }}>
                                    {{ $color->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('tags')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>

    </div>

    {{-- Product Details --}}
    <div class="mb-4 border p-3 rounded text-gray-400">
        <h5>Product Variant Details</h5>

        <div class="flex g-3 gap-4">
            <div class="col-md-4">
                <label for="stock" class="form-label">Stock</label>
                <br>
                <input type="number" name="stock" id="stock" value="{{ old('stock') }}"
                    class="form-control text-gray-400">
                @error('stock')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label">Price</label>
                <br>
                <input type="number" name="price" id="price" value="{{ old('price') }}"
                    class="form-control text-gray-400">
                @error('price')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

        </div>
    </div>


    {{-- Buttons --}}
    <div class="flex gap-2 m-3">
        <button type="submit" class="btn btn-primary m-3">Create Variant</button>
        <br>
        <a href="{{ route('dashboard.variant.index') }}" class="btn btn-secondary m-3">Cancel</a>
    </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger text-red-500">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif


    </div>

    {{-- <script>
        // Optional: Bootstrap validation script
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script> --}}
</x-layouts.app>
