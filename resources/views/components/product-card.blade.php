@props(['product'])

@php
    $currencySymbol = session('currency_symbol', '₦');
    $currencyRate = (float) session('currency_rate', 1);
    $convertedPrice = number_format($product['price'] / $currencyRate, 2);
@endphp

<!-- Product Card -->
<div
    class="group relative m-2 bg-white  shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl overflow-hidden border border-gray-100">
    <img src="{{ $product['featured_image'] }}" alt="{{ $product['name'] }}"
        class="w-full h-60 object-cover transition-transform duration-300 group-hover:scale-105">

    <div class="p-4 space-y-2">
        <h3 class="text-lg font-semibold text-gray-900">{{ $product['name'] }}</h3>
        <div class="text-sm text-gray-700 line-clamp-2">
            {{ \Illuminate\Support\Str::limit($product['description'], 350) }}
        </div>
        <div class="text-blue-700 font-bold text-xl">{{ $currencySymbol }} {{ $convertedPrice }}</div>
    </div>

    <!-- Slide-in Buttons -->
    <div
        class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 opacity-0 group-hover:opacity-100 bg-white p-3 flex gap-3 justify-center transition duration-300">
        <a href="{{ route('shop.show', $product['id']) }}" style="color: white;"
            class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-800 text-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
            View Product
        </a>
        <button type="button" data-product='@json($product)'
            class="flex-1 text-center bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-800 text-sm open-quick-view transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            Quick View
        </button>
    </div>
</div>

<!-- Quick View Modal -->
<div id="quickViewModal"
    class="fixed inset-0 bg-black bg-opacity-70 z-50 hidden items-center justify-center px-4 overflow-y-auto">
    <div class="bg-white rounded-lg max-w-md w-full p-6 relative shadow-lg animate__animated animate__fadeInDown">
        <button
            class="absolute  top-2 right-3 text-gray-600 bg-red-600 hover:text-white text-2xl rounded focus:outline-none"
            onclick="closeQuickView()"
            style="background-color: red; width: 40px; height: 40px;  border-radius: 20px;">&times;</button>
        <img id="modalImage" src="" class="w-full h-48 object-cover mb-4 rounded" alt="Product image">
        <h2 id="modalName" class="text-xl font-bold mb-2 text-gray-800"></h2>
        <p id="modalDescription" class="text-sm text-gray-700 mb-4"></p>
        <div class="mb-3">
            <span id="modalPrice" class="text-blue-700 text-lg font-semibold"></span>
        </div>
        <div class="flex items-center gap-3 mb-4">
            <label for="quantity" class="text-sm font-medium text-gray-700">Qty:</label>
            <input type="number" id="modalQuantity" value="1" min="1"
                class="border border-gray-300 rounded p-1 w-16 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <a href="#" id="modalProductLink"
            class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-800 transition text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            Go to Product Page
        </a>
    </div>
</div>

<!-- Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('quickViewModal');
        const modalImage = document.getElementById('modalImage');
        const modalName = document.getElementById('modalName');
        const modalDescription = document.getElementById('modalDescription');
        const modalPrice = document.getElementById('modalPrice');
        const modalProductLink = document.getElementById('modalProductLink');
        const modalQuantity = document.getElementById('modalQuantity');

        const currencySymbol = '{{ session('currency_symbol', '₦') }}';
        const currencyRate = parseFloat('{{ session('currency_rate', 1) }}');

        document.querySelectorAll('.open-quick-view').forEach(button => {
            button.addEventListener('click', function() {
                const product = JSON.parse(this.dataset.product);
                modalImage.src = product.featured_image;
                modalName.textContent = product.name;
                modalDescription.textContent = product.description;
                modalPrice.textContent =
                    `${currencySymbol} ${(product.price / currencyRate).toFixed(2)}`;
                modalProductLink.href = `/shop/${product.id}`;
                modalQuantity.value = 1;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });
    });

    function closeQuickView() {
        const modal = document.getElementById('quickViewModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
</script>
