<x-layouts.app :title="__('Create Size')">
    <div class="container py-4 text-gray-400">
        <h1 class="mb-4">Create Size</h1>

        <form action="{{ route('dashboard.size.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf


                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>



            {{-- Buttons --}}
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Create Size</button>
                <br>
                <a href="{{ route('dashboard.size.index') }}" class="btn btn-secondary">Cancel</a>
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
