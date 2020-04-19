<?php

namespace App\Mail;

use App\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerMessage extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $message;

  /**
   * Create a new message instance.
   *
   * @param \App\Message $message
   */
    public function __construct(Message $message)
    {
      $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('reservations@tamchayretreat.com')
        ->markdown('emails.new_message')
        ->with([
          'name' => $this->message->name,
          'phone' => $this->message->phone,
          'email' => $this->message->email,
          'customer_message' => $this->message->message,
          'created_at' => $this->message->created_at,
        ]);
    }
}
