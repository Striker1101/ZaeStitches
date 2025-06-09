<x-layouts.app :title="__('Create Currency')">
    <div class="container py-4 text-gray-400">
        <h1 class="mb-4">Create Currency</h1>

        <form action="{{ route('dashboard.currency.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf


                <div class="mb-3 flex flex-wrap">
                    <div class="form-group m-3 p-3">
                        <label for="name" class="form-label " >Name *
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control w-full" required>
                     @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label></div>

                    <br/>
                    <div class="form-group m-3 p-3">
                    <label for="code" class="form-label m-3" >Code *
                    <input type="text" name="code" id="code" value="{{ old('code') }}" class="form-control w-full" required>
                     @error('code') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>

                    <br/>
                    <div class="form-group m-3 p-3">
                    <label for="symbol" class="form-label m-3" >Symbol *
                    <input type="text" name="symbol" id="symbol" value="{{ old('symbol') }}" class="form-control w-full" required>
                     @error('symbol') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>

                     <br/>
                    <div class="form-group m-3 p-3">
                    <label for="rate_to_naira" class="form-label m-3" >Rate To Naira *
                    <input type="number" name="rate_to_naira" id="rate_to_naira" value="{{ old('rate_to_naira') }}" class="form-control w-full" required>
                     @error('rate_to_naira') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>

                    <br/>
                    <div class="form-group m-3 p-3">
                    <label for="country_code" class="form-label m-3" >Country Code *
                    <input type="text" name="country_code" id="country_code" value="{{ old('country_code') }}" class="form-control w-full" required>
                     @error('country_code') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>

                    <br/>
                    <div class="form-group m-3 p-3">
                    <label for="shipping_amount" class="form-label m-3" >Shipping Address *
                    <input type="number" name="shipping_amount" id="shipping_amount" value="{{ old('shipping_amount') }}" class="form-control w-full" required>
                     @error('shipping_amount') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>

                    <br/>
                    <div class="form-group m-3 p-3">
                    <label for="flag" class="form-label m-3" >Flag *
                    <input type="text" name="flag" id="flag" value="{{ old('flag') }}" class="form-control w-full" required>
                     @error('flag') <div class="text-danger small">{{ $message }}</div> @enderror
                    </label>
                    </div>


                </div>



            {{-- Buttons --}}
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Create Currency</button>
                <br>
                <a href="{{ route('dashboard.currency.index') }}" class="btn btn-secondary">Cancel</a>
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
