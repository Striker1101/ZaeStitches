<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $shipping;
    public $carts;

    public function __construct($order, $shipping, $carts)
    {
        $this->order = $order;
        $this->shipping = $shipping;
        $this->carts = $carts;
    }

    public function build()
    {
        return $this->subject('Payment Successful - Order ' . $this->order->order_number)
                    ->markdown('emails.payment.success');
    }
}
