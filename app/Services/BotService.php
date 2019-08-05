<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 7/6/19
 * Time: 6:26 PM
 */

namespace App\Services;

use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;

class BotService
{
    public function getLastMessage()
    {
        $messages = Telegram::getUpdates();
        return end($messages)['message']['text'];
    }

    public function runCommand($command)
    {
        return $command == '/start' ? 'Hello' : 'Not supported command';
    }
}
