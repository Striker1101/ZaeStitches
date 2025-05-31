<x-layouts.app :title="__('Create Brand')">
    <div class="container py-4 text-gray-400">
        <h1 class="mb-4">Create Brand</h1>

        <form action="{{ route('dashboard.brand.store') }}" method="POST" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            @csrf


            <div class="mb-3 flex flex-wrap">
                <div class="form-group m-3 p-3">
                    <label for="name" class="form-label ">Name *
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="form-control w-full" required>
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </label>
                </div>

                <br />
                <div class="form-group m-3 p-3">
                    <label for="slug" class="form-label m-3">Slug *
                        <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                            class="form-control w-full" required>
                        @error('slug')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </label>
                </div>

                <br />
                <div class="form-group m-3 p-3">
                    <label for="description" class="form-label m-3">Description *
                        <input type="text" name="description" id="description" value="{{ old('description') }}"
                            class="form-control w-full" required>
                        @error('description')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </label>
                </div>

                <br />

                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control"
                        accept="image/*">
                    @error('logo')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            {{-- Buttons --}}
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Create Brand</button>
                <br>
                <a href="{{ route('dashboard.brand.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <script>
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
    </script>
</x-layouts.app>
