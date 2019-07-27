<?php
require_once 'vendor/autoload.php';

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Drivers\Facebook;

$config = [
    'facebook' => [

        'token' => 'EAAFLeZBbzr3YBAIc0YyV5iZChqFvCtrWrbQpabbunVerpK3ocf516VUxhjhNuCqi10ZATEZBKEmj5P7FkmMysnZANtsUG6T1ZA4eA9YqSGwqKCO1BMql8yeC3f89WU2pkfrtwqaIduJpxCmeAs1JRfZC4K3lntlGGQZCZCIlNOi7jQZAL94CmmZCjWg',
      'app_secret' => '19fcf0b52370d00d3444bd05a890afe4',
      'verification'=>'azerty_123',
      'serverURL'=> 'https://a2c8c554.ngrok.io',
  ]
];

// Load the driver(s) you want to use
DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);

// Create an instance
$botman = BotManFactory::create($config);

// Give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('Hello yourself.');
});

// Start listening
$botman->listen();