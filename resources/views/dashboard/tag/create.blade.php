<x-layouts.app :title="__('Create Tag')">
    <div class="container py-4 text-gray-400">
        <h1 class="mb-4">Create Tag</h1>

        <form action="{{ route('dashboard.tag.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf


                <div class="mb-3 flex flex-wrap">
                    <div class="form-group m-3 p-3">
                        <label for="name" class="form-label " >Name *
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control w-full" required>
                     @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label></div>

                    <br/>
                    <div class="form-group m-3 p-3">
                    <label for="slug" class="form-label m-3" >Slug *
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="form-control w-full" required>
                     @error('slug') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>


                     <br/>
                    <div class="form-group m-3 p-3">
                    <label for="type" class="form-label m-3" >Type *
                        <select type="text" name="type" id="type" value="{{ old('type') }}" class="form-control w-full" required>
<option value="product">Product</option>
<option value="blog">Blog</option>
<option value="both">Both</option>
                        </select>

                     @error('type') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>

                </div>



            {{-- Buttons --}}
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Create Tag</button>
                <br>
                <a href="{{ route('dashboard.tag.index') }}" class="btn btn-secondary">Cancel</a>
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
