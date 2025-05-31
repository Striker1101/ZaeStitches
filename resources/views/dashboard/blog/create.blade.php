<x-layouts.app :title="__('Create Blog')">
    <div class="container py-4 text-gray-400">
        <h1 class="mb-4">Create Blog</h1>

        <form action="{{ route('dashboard.blog.store') }}" method="POST" enctype="multipart/form-data"
            class="needs-validation text-gray-400" novalidate>
            @csrf
            {{-- Basic Info --}}
            <div class="mb-4 border p-3 rounded ">
                <h5>Basic Information</h5>

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

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
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control w-full">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Pricing --}}
            <div class="mb-4 border p-3 rounded ">
                <h5>Duration</h5>
                <div class="flex g-3 gap-4 ">
                    <div class="col-md-6 w-full">
                        <label for="price" class="form-label">Duration *</label>
                        <input type="number" name="duration" id="duration" value="{{ old('duration') }}"
                            min="0" class="form-control w-full" required>
                        @error('duration')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Relationships --}}
            <div class="mb-4 border p-3 rounded ">
                <h5>Associations</h5>

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

    {{-- Blog Details --}}
    <div class="mb-4 border p-3 rounded text-gray-400">
        <h5>Blog Details</h5>

        <div class="flex g-3 gap-4">
            <div class="col-md-4">
                <label for="weight" class="form-label">Content</label>
                <br>
                <textarea cols="100" rows="10" name="content" id="content" value="{{ old('content') }}"
                    class="form-control text-gray-400"></textarea>
                @error('content')
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
            <input type="file" name="media[]" id="media" class="form-control" multiple accept="image/*,video/*">
            @error('media')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- Status and Flags --}}
    <div class="mb-4 border p-3 rounded ">
        <h5>Status </h5>

        <div class="flex flex-wrap gap-4">
            <div class="mb-3">
                <label for="status" class="form-label">Status *</label>
                <select name="status" id="status" class="form-select text-gray-400" required>
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    {{-- Buttons --}}
    <div class="flex gap-2 m-3">
        <button type="submit" class="btn btn-primary m-3">Create Blog</button>
        <br>
        <a href="{{ route('dashboard.blog.index') }}" class="btn btn-secondary m-3">Cancel</a>
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
