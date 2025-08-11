<div>
    <!-- Toggle Button (Always visible, high z-index) -->
    <button id="currencyToggleBtn"
        class="fixed top-1/2 right-0 transform -translate-y-1/2 bg-blue-600 text-white p-3 rounded-l shadow-lg z-50"
        aria-label="Open currency selector">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
    </button>

    <!-- Sidebar -->
    <div id="currencySideMenu"
        class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-40">
        <div class="p-4 flex justify-between items-center border-b">
            <h3 class="text-lg font-bold">Select Currency</h3>
            <button id="currencyCloseBtn" class="text-gray-700 hover:text-gray-900 text-2xl">&times;</button>
        </div>

        <ul class="p-4 space-y-2 overflow-auto max-h-[calc(100vh-64px)]">
            @foreach ($currencies as $currency)
                <li>
                    <button class="w-full text-left p-2 rounded hover:bg-blue-100" data-code="{{ $currency->code }}"
                        data-symbol="{{ $currency->symbol }}" data-rate="{{ $currency->rate_to_naira }}">
                        <img class="rounded-full w-10 h-10" src="{{ $currency->flag }}" alt="{{ $currency->name }}">
                        {{ $currency->name }} ({{ $currency->symbol }}) - {{ $currency->code }}
                    </button>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('currencyToggleBtn');
        const sideMenu = document.getElementById('currencySideMenu');
        const closeBtn = document.getElementById('currencyCloseBtn');

        toggleBtn.addEventListener('click', () => {
            sideMenu.classList.remove('translate-x-full');
            sideMenu.classList.add('translate-x-0');
        });

        closeBtn.addEventListener('click', () => {
            sideMenu.classList.remove('translate-x-0');
            sideMenu.classList.add('translate-x-full');
        });

        // Currency selection
        sideMenu.querySelectorAll('button[data-code]').forEach(btn => {
            btn.addEventListener('click', () => {
                const code = btn.getAttribute('data-code');
                const symbol = btn.getAttribute('data-symbol');

                fetch(`/set-currency/${code}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => {
                    if (response.ok) {
                        const currency = JSON.parse(localStorage.getItem('currency')) ||
                        {}
                        // const currency = localStorage.getItem('currency')
                        currency.country_code = code
                        currency.symbol = symbol

                        localStorage.setItem("currency", JSON.stringify(currency));
                        window.location.reload();
                    }
                });
            });
        });
    });
</script>
