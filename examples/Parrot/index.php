<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

use TelegramBotPHP\Bot;
use TelegramBotPHP\Helpers\Helper;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * @link https://core.telegram.org/bots/api#authorizing-your-bot
 */
$bot = new Bot('5132260282:AAFgVVmhexEGLvKAjqzl8uXAqKL-D3ns9g0');

$chatId = Helper::getChatId();

$bot->copyMessage([
    'chat_id' => $chatId,
    'from_chat_id' => $chatId,
    'message_id' => Helper::getMessageId(),
]);
