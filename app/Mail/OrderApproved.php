<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderApproved extends Mailable
{
    public $order;
    public $shipmentData;

    public function __construct($order, $shipmentData)
    {
        $this->order = $order;
        $this->shipmentData = $shipmentData;
    }

    public function build()
    {
        $mail = $this->subject('Your Order Has Been Shipped')->view('emails.order.approved');

        // Attach DHL Label if available
        if (!empty($this->shipmentData['documents'][0]['content'])) {
            $pdfContent = base64_decode($this->shipmentData['documents'][0]['content']);
            $mail->attachData($pdfContent, 'shipping_label.pdf', ['mime' => 'application/pdf']);
        }

        return $mail;
    }
}
