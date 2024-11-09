<?php

namespace App\Services;

use GuzzleHttp\Client;

class TelegramService
{
    // protected $client;
    // protected $token;

    // public function __construct()
    // {
    //     $this->client = new Client();
    //     $this->token = env('TELEGRAM_BOT_TOKEN'); // .env dosyasından bot tokenini al

    // }


    public function sendMessage($message)
    {
        $client = new Client();
        $response = $client->post('https://api.telegram.org/bot' . env('TELEGRAM_BOT_TOKEN') . '/sendMessage', [
            'form_params' => [
                'chat_id' => env('TELEGRAM_CHAT_ID'),
                'text' => $message
            ]
        ]);
    }
}