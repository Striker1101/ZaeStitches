<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyCustomEmails extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $shipping;
    public $carts;

    public function __construct(Order $order, array $shipping, array $carts)
    {
        $this->order = $order;
        $this->shipping = $shipping;
        $this->carts = $carts;
    }

    public function build()
    {
        return $this->markdown('emails.notification.custom_email')
            ->subject('New Order Placed - ' . $this->order->order_number);
    }
}
