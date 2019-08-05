<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class BotController extends Controller
{
    public function setWebHook()
    {
        $client = new Client(['base_uri' => 'https://api.telegram.org/bot'.Telegram::getAccessToken().'/']);
        $result = $client->request(
            'POST',
            'setwebhook',
            [
                'query' => [
                    'url' => 'https://a3e6d0ba.ngrok.io/' . Telegram::getAccessToken()
                ]
            ]
        );

        die(var_dump(json_decode($result->getBody())));
    }

    public function getWebHookInfo()
    {
        $client = new Client(['base_uri' => 'https://api.telegram.org/bot'.Telegram::getAccessToken().'/']);
        $result = $client->request(
            'POST',
            'getWebhookInfo'
        );

        die(var_dump(json_decode($result->getBody())));
    }
}
