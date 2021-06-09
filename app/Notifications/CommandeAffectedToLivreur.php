<?php

namespace App\Notifications;

use App\Models\User;
use App\Models\Commande;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CommandeAffectedToLivreur extends Notification
{
    use Queueable;

    protected $commande;
   

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Commande $commande)
    {
        $this->commande = $commande;
       

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'plat_id' => $this->commande->plat_id,
            'prix' => $this->commande->plat->prix,
            'image' => $this->commande->plat->image,
            'user_id' => $this->commande->user_id,
            'restaurant_id' => $this->commande->restaurant_id,
            'livreur_id' => $this->commande->livreur_id,
        ];
    }
}
