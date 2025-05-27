<x-layouts.app :title="__('Create Color')">
    <div class="container py-4 text-gray-400">
        <h1 class="mb-4">Create Color</h1>

        <form action="{{ route('dashboard.color.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf


                <div class="mb-3 flex flex-wrap">
                    <div class="form-group m-3 p-3">
                        <label for="name" class="form-label " >Name *
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                     @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label></div>

                    <br/>
                    <div class="m-3 p-3">
 <label for="hex" class="form-label m-3" >Hex *
                    <input type="text" name="hex" id="hex" value="{{ old('hex') }}" class="form-control" required>
                     @error('hex') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>

                </div>



            {{-- Buttons --}}
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Create Color</button>
                <br>
                <a href="{{ route('dashboard.color.index') }}" class="btn btn-secondary">Cancel</a>
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
