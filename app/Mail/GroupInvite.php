<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GroupInvite extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $invite_code;
    public $group;
    public $message;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code, $group, $message, $name)
    {
        $this->invite_code = $code;
        $this->group = $group;
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@esute.ng')
            ->markdown('emails.groups.invite');
    }
}
