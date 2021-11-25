<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageSent extends Notification
{
    use Queueable;

    public $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        //
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        //para correo personalizado
        //borrar todo y poner: ->view('email.message', ['message' => $this->message]);
        ->subject('Tienes un nuevo mensaje')
        ->greeting('Buenos dias estimados')
                    ->line('Para leer tu mensaje haz click en el botón.')
                    ->action('Ver mensaje', route('admin.messages.show', $this->message->id))
                    ->line('Hasta luego!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
           'url' => route('admin.messages.show', $this->message->id),
           'message' => 'Has recibido un mensaje de '. User::find($this->message->from_user_id)->name
        ];
    }
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
