<x-layouts.app :title="__('Create Product')">
    <div class="container py-4 text-gray-400">
        <h1 class="mb-4">Create Product</h1>

        <form action="{{ route('dashboard.product.store') }}" method="POST" enctype="multipart/form-data"
            class="needs-validation text-gray-400" novalidate>
            @csrf
            {{-- Basic Info --}}
            <div class="mb-4 border p-3 rounded ">
                <h5>Basic Information</h5>

                <div class="flex gap-5">
                    <div class="mb-3 w-full">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                            class="form-control w-full" required>
                        @error('title')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 w-full">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                            class="form-control w-full">
                        @error('slug')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 w-full">
                        <label for="hs_code" class="form-label">HS Code</label>
                        <input type="text" name="hs_code" id="hs_code" value="{{ old('hs_code') }}"
                            class="form-control w-full">
                        @error('hs_code')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control w-full">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content (DHL Description)</label>
                    <textarea name="content" id="content" rows="4" class="form-control w-full">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Pricing --}}
            <div class="mb-4 border p-3 rounded ">
                <h5>Pricing</h5>
                <div class="flex g-3 gap-4 ">
                    <div class="col-md-6 w-full">
                        <label for="price" class="form-label">Price *</label>
                        <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01"
                            min="0" class="form-control w-full" required>
                        @error('price')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 w-full">
                        <label for="discount_price" class="form-label">Discount Price</label>
                        <input type="number" name="discount_price" id="discount_price"
                            value="{{ old('discount_price') }}" step="0.01" min="0"
                            class="w-full form-control">
                        @error('discount_price')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Relationships --}}
            <div class="mb-4 border p-3 rounded ">
                <h5>Associations</h5>

                <div class="mb-3 w-full">
                    <label for="brand_id" class="form-label">Brand *</label>
                    <br>
                    <select name="brand_id" id="brand_id" class="form-select" required>
                        <option value="" disabled selected>Select brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('brand_id')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex">
                    <div class="mb-3 ">
                        <label for="categories" class="form-label">Categories</label>
                        <br>
                        <select name="categories[]" id="categories" class="form-select" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ collect(old('categories'))->contains($category->id) ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('categories')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <br>
                        <select name="tags[]" id="tags" class="form-select" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}"
                                    {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }}>
                                    {{ $tag->name }}
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
        <h5>Product Details</h5>

        <div class="flex g-3 gap-4">
            <div class="col-md-4">
                <label for="weight" class="form-label">Weight</label>
                <br>
                <input type="text" name="weight" id="weight" value="{{ old('weight') }}"
                    class="form-control text-gray-400">
                @error('weight')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="dimension" class="form-label">Dimension</label>
                <br>
                <input type="text" name="dimension" id="dimension" value="{{ old('dimension') }}"
                    class="form-control text-gray-400">
                @error('dimension')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="material" class="form-label">Material</label>
                <br>
                <input type="text" name="material" id="material" value="{{ old('material') }}"
                    class="form-control text-gray-400">
                @error('material')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    {{-- Media --}}
    <div class="mb-4 border p-3 rounded ">
        <h5>Media Upload</h5>

        <div class="mb-3">
            <label for="featured_image" class="form-label">Featured Image</label>
            <input type="file" name="featured_image" id="featured_image" class="form-control" accept="image/*">
            @error('featured_image')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="media" class="form-label">Additional Media (images/videos)</label>
            <input type="file" name="media[]" id="media" class="form-control" multiple
                accept="image/*,video/*">
            @error('media')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- Status and Flags --}}
    <div class="mb-4 border p-3 rounded ">
        <h5>Status & Flags</h5>

        <div class="flex flex-wrap gap-4">
            <div class="mb-3">
                <label for="status" class="form-label">Status *</label>
                <select name="status" id="status" class="form-select text-gray-400" required>
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                </select>
                @error('status')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="rating" class="form-label">Rating (0 - 5)</label>
                <input type="number" name="rating" id="rating" value="{{ old('rating') }}" min="0"
                    max="5" step="0.1" class="form-control text-gray-500">
                @error('rating')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="is_popular" id="is_popular" class="form-check-input"
                    {{ old('is_popular') ? 'checked' : '' }}>
                <label for="is_popular" class="form-check-label">Is Popular</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="is_latest" id="is_latest" class="form-check-input"
                    {{ old('is_latest') ? 'checked' : '' }}>
                <label for="is_latest" class="form-check-label">Is Latest</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="is_available" id="is_available" class="form-check-input"
                    {{ old('is_available') ? 'checked' : '' }}>
                <label for="is_available" class="form-check-label">Is Available</label>
            </div>
        </div>
    </div>

    {{-- Buttons --}}
    <div class="flex gap-2 m-3">
        <button type="submit" class="btn btn-primary m-3">Create Product</button>
        <br>
        <a href="{{ route('dashboard.product.index') }}" class="btn btn-secondary m-3">Cancel</a>
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
