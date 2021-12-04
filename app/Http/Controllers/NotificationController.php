<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new Basic("073649d3", "WolypGSx6wol3Tow"); //Vonage\Client\Credentials\Basic
        $client = new Client($basic);

        $message = $client->message()->send([
            'to' => '51998905385',
            'from' => 'Dental Ecommerce',
            'text' => 'Este es un mensaje de prueba de Dental Ecommerce'
        ]);

        dd('SMS message has been delivered.');

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
