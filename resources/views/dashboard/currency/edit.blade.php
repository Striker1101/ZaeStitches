<x-layouts.app :title="__('Edit Currency')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Currency: {{ $currency->name }}</h1>

        <form action="{{ route('dashboard.currency.update', $currency) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <label class="block mb-2">Name
            <input type="text" name="name" value="{{ old('name', $currency->name) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <label class="block mb-2">Code
            <input type="text" name="code" value="{{ old('code', $currency->code) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

             <label class="block mb-2">Symbol
            <input type="text" name="symbol" value="{{ old('symbol', $currency->symbol) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

             <label class="block mb-2">Rate To Naira
            <input type="text" name="rate_to_naira" value="{{ old('rate_to_naira', $currency->rate_to_naira) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

             <label class="block mb-2">Shipping Amount
            <input type="text" name="shipping_amount" value="{{ old('shipping_amount', $currency->shipping_amount) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

             <label class="block mb-2">Country Code
            <input type="text" name="country_code" value="{{ old('country_code', $currency->country_code) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

             <label class="block mb-2">Flag
            <input type="url" name="flag" value="{{ old('flag', $currency->flag) }}" required
                   class="w-full mb-4 border px-3 py-2 rounded" />
            </label>

            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Update Currency</button>
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
        <form action="{{ route('dashboard.currency.destroy', $currency) }}" method="POST" onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete Currency</button>
        </form>
    </div>
</x-layouts.app>
