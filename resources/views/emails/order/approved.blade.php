<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Your Order Has Been Shipped</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .button {
            display: inline-block;
            background-color: #1a73e8;
            color: #fff !important;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin: 20px 0;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Your Order Has Been Shipped! 🚚</h2>

        <p>Hello {{ $order->shipping_name ?? 'Customer' }},</p>

        <p>Your order <strong>{{ $order->order_number }}</strong> has been shipped.</p>

        <p><strong>Tracking Number:</strong> {{ $shipmentData['shipmentTrackingNumber'] ?? 'N/A' }}</p>

        @if (!empty($shipmentData['trackingUrl']))
            <a href="https://www.dhl.com/ng-en/home/tracking.html" class="button">Track Your Order</a>
        @endif

        <p>You will also find your shipping label attached to this email.</p>

        <div class="footer">
            Thanks,<br>
            {{ config('app.name') }}
        </div>
    </div>
</body>

</html>
