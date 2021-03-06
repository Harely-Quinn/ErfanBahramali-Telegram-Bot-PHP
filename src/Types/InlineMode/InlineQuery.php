<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\Location;
use TelegramBotPHP\Types\User;

/**
 * InlineQuery Class
 *
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 *
 * @link https://core.telegram.org/bots/api#inlinequery
 */
class InlineQuery extends Type
{
    /**
     * getTypeVariables function
     * To specify the type of value of Variables
     *
     * @return array
     */
    protected function getTypeVariables()
    {
        return [
            'from' => User::class,
            'location' => Location::class,
        ];
    }
	/**
	 * Unique identifier for this query
	 */
	public string $id;

	/**
	 * Sender
	 */
	public User $from;

	/**
	 * Text of the query (up to 256 characters)
	 */
	public string $query;

	/**
	 * Offset of the results to be returned, can be controlled by the bot
	 */
	public string $offset;

	/**
	 * [optional] Type of the chat, from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
	 */
	public string $chatType;

	/**
	 * [optional] Sender location, only for bots that request user location
	 */
	public Location $location;

}