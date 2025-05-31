<x-layouts.app :title="__('Order Details')">
    <div class="max-w-5xl mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">Order #{{ $order->order_number }}</h1>

        <div class="bg-gray-600 shadow rounded p-4 mb-6">
            <h2 class="text-xl font-semibold mb-2">Order Summary Currency({{ $order->country_code }})
            </h2>
            <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
            <p><strong>Total Amount:</strong> {{ number_format($order->total_amount, 2) }}</p>
            <p><strong>Customer:</strong> {{ optional($order->user)->name ?? 'Guest' }}</p>
            <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>

            @php
                $shipping = json_decode($order->shipping_details, true) ?? [];
                // @dd($shipping)
            @endphp

            <h2 class="text-lg font-semibold mt-4">Shipping Details</h2>
            <p><strong>Name:</strong> {{ $shipping['name'] ?? 'N/A' }}</p>
            <p><strong>Phone:</strong> {{ $shipping['phone'] ?? 'N/A' }}</p>
            <p><strong>Email:</strong> {{ $shipping['email'] ?? 'N/A' }}</p>
            <p><strong>Address:</strong> {{ $shipping['address'] ?? 'N/A' }}</p>
            <p><strong>City:</strong> {{ $shipping['city'] ?? 'N/A' }}</p>
            <p><strong>State:</strong> {{ $shipping['state'] ?? 'N/A' }}</p>
            <p><strong>Country:</strong> {{ $shipping['country'] ?? 'N/A' }}</p>
        </div>


        <div class="bg-gray-600 shadow rounded p-4">
            <h2 class="text-xl font-semibold mb-4">Cart Items</h2>
            @if ($carts->isEmpty())
                <p>No cart items found for this order.</p>
            @else
                <table class="w-full text-left text-sm border">
                    <thead>
                        <tr class="bg-gray-600">
                            <th class="px-4 py-2 border">Product</th>
                            <th class="px-4 py-2 border">Quantity</th>
                            <th class="px-4 py-2 border">Price</th>
                            <th class="px-4 py-2 border">Color</th>
                            <th class="px-4 py-2 border">Size</th>
                            <th class="px-4 py-2 border">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                            {{-- @dd($cart); --}}
                            <tr>
                                <td class="px-4 py-2 border">{{ $cart['product']['title'] ?? 'N/A' }}</td>
                                <td class="px-4 py-2 border">{{ $cart["quantity"] }}</td>
                                <td class="px-4 py-2 border">{{ number_format($cart['price'], 2) }}</td>
                                <td class="px-4 py-2 border">{{ $cart['color'] ?? '-' }}</td>
                                <td class="px-4 py-2 border">{{ $cart['size'] ?? '-' }}</td>
                                <td class="px-4 py-2 border">{{ $cart['price'] ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

</x-layouts.app>
