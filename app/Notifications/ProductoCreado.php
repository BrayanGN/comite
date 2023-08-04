<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProductoCreado extends Notification
{
    /*
    Comando para crear una notificacion despues de activar una accion:
    php artisan make:notification ProductoCread

    Controlador:
    use App\Notifications\ProductoCreado;
    use Illuminate\Support\Facades\Notification;
    use Illuminate\Support\Facades\Auth;

    Ver controlador de producto
    */
    use Queueable;

    protected $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            // Titulo:
            ->subject('¡Nuevo producto creado!')
            ->greeting('¡Hola!')
            ->line('Se ha creado un nuevo producto en nuestra tienda.')
            ->line('Detalles del producto:')
            ->line('Nombre: ' . $this->product->name)
            ->line('Descripción: ' . $this->product->detail)
            ->action('Ver producto', url('/products/' . $this->product->id))
            ->line('¡Gracias por usar nuestra tienda!');
    }

    public function toArray(object $notifiable): array
    {
        return [
            // Se usa cuando deseas enviar notificaciones a través de canales que no sean de correo electrónico, como SMS, base de datos, etc
        ];
    }
}
