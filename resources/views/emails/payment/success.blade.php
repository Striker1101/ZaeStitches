@component('mail::message')
    # Payment Successful 🎉

    Hello {{ $shipping['name'] }},

    Your payment for **Order #{{ $order->order_number }}** was successful.

    **Order Summary:**
    - Total Paid: {{ $shipping['symbol'] }}{{ number_format($shipping['cost'], 2) }}
    - Shipping Cost: {{ $shipping['symbol'] }}{{ number_format($shipping['shipping_cost'], 2) }}
    - Shipping Address: {{ $shipping['address'] }}, {{ $shipping['city'] }}, {{ $shipping['state'] }},
    {{ $shipping['country'] }}

    **Purchased Items:**
    @foreach ($carts as $item)
        - {{ $item['product']['title'] }} (x{{ $item['quantity'] }}) -
        {{ $item['currency'] }}{{ number_format($item['price'], 2) }}
    @endforeach

    We’ll notify you when your order is approved and provide a tracking ID.

    Thanks for shopping with us!
    {{ config('app.name') }}
@endcomponent
