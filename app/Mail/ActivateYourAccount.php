<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivateYourAccount extends Mailable
{
    use Queueable, SerializesModels;
	public $code;
	public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code)
    {
        //
		$this->code = $code;
		$this->url = route('user.active',$code);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.activate_user_account');
    }
}
