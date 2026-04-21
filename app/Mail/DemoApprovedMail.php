<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $demo;

    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🎉 Your Demo Request is Approved'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.demo-approved',
            with: [
                'demo' => $this->demo
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}