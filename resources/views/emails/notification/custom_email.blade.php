@component('mail::message')
    # New Order Alert

    A new order has just been placed on your platform.

    **Order Number:** {{ $order->order_number }}
    **Customer Name:** {{ $shipping['name'] ?? 'N/A' }}
    **Email:** {{ $shipping['email'] ?? 'N/A' }}
    **Total Amount:** {{ number_format($order->total_amount, 2) }}

    @component('mail::panel')
        **Items Ordered:**

        @foreach ($carts as $cart)
            - {{ $cart['product']['title'] ?? 'Unknown Product' }} (x{{ $cart['quantity'] ?? 1 }})
        @endforeach
    @endcomponent

    @component('mail::button', ['url' => url('/dashboard/orders/' . $order->id)])
        View Order
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
