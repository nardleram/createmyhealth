<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InterestRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Request $request)
    {}

    public function envelope()
    {
        return new Envelope(
            subject: "{$this->request->name} registered interest in helping CMH",
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.registered-interest',
        );
    }

    public function attachments()
    {
        return [];
    }
}
