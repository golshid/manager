<?php

namespace App\Mail;
use App\Invite;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $invite;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Invite $invite)
    {
         $this->invite = $invite;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('golshid.shn@gmail.com')
                ->view('emails.invite');
    }
}