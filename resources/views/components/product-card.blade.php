@props(['product'])

@php
    $currency = '₦'; // Default for guests
    if (auth()->check() && auth()->user()->currency) {
        $currency = auth()->user()->currency;
    } elseif (session('currency')) {
        $currency = session('currency');
    }
@endphp

<div class="bg-white shadow rounded-lg overflow-hidden">
    <img src="{{ $product['featured_image'] }}" alt="P{{ $product['name'] }}" class="w-full h-72 object-cover">
    <div class="p-4">
        <div class="text-sm text-gray-500 mb-1">{{ $product['name'] }}</div>
        <h3 class="text-lg font-semibold mb-2">{{ Str::limit($product['description'], 15) }}</h3>

        <div class="text-blue-600 font-bold text-lg mb-4 price" data-raw-price="{{ $product['price'] }}">
            <span class="currency-symbol">{{ $currency }}</span> {{ $product['price'] }}
        </div>

        <div class="flex flex-col gap-2">
            <a href="{{ route('shop.show', $product['id']) }}"
                class="w-full text-center border border-gray-300 text-gray-700 py-2 rounded hover:bg-gray-100 transition">
                Quick View
            </a>
            <button class="w-full text-center text-red-500 hover:text-red-600 transition wishlist-btn"
                data-id="{{ $product['id'] }}">
                Add to Wishlist ❤️
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        // Currency handling
        const prices = document.querySelectorAll('.price');
        let currency = localStorage.getItem('user_currency');

        if (!currency) {
            try {
                const res = await fetch('/currency-detect');
                currency = await res.text();
                localStorage.setItem('user_currency', currency);
            } catch (e) {
                currency = 'NGN'; // fallback
            }
        }

        prices.forEach(priceDiv => {
            const rawPrice = parseFloat(priceDiv.dataset.rawPrice);

            try {
                const formatted = new Intl.NumberFormat(undefined, {
                    style: 'currency',
                    currency: currency
                }).format(rawPrice);

                priceDiv.innerHTML = formatted;
            } catch {
                priceDiv.querySelector('.currency-symbol').textContent = '₦';
            }
        });

        // Wishlist logic with event delegation
        let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

        // Initialize buttons based on stored wishlist
        document.querySelectorAll('.wishlist-btn').forEach(btn => {
            const id = btn.dataset.id;
            if (wishlist.includes(id)) {
                btn.textContent = 'Remove from Wishlist ❤️';
            } else {
                btn.textContent = 'Add to Wishlist ❤️';
            }
        });

        if (!window.wishlistListenerAdded) {
            document.body.addEventListener('click', function(e) {
                if (e.target.classList.contains('wishlist-btn')) {
                    const btn = e.target;
                    const id = btn.dataset.id;
                    const index = wishlist.indexOf(id);

                    if (index === -1) {
                        wishlist.push(id);
                        btn.textContent = 'Remove from Wishlist ❤️';
                        showToast('Added to wishlist');
                    } else {
                        wishlist.splice(index, 1);
                        btn.textContent = 'Add to Wishlist ❤️';
                        showToast('Removed from wishlist');
                    }
                    localStorage.setItem('wishlist', JSON.stringify(wishlist));
                }
            });
            window.wishlistListenerAdded = true;
        }


        function showToast(message) {
            Toastify({
                text: message,
                duration: 2500,
                gravity: "top",
                position: "right",
                backgroundColor: "#4caf50",
                close: true
            }).showToast();
        }
    });
</script>
