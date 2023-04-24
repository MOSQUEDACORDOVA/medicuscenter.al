<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACcfc818db7fa419a91f051f130bfaf044';
$auth_token = '2c7f6552d1b959c10c5d063db8ea1733';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+16579998723";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+355699149331',
    array(
        'from' => $twilio_number,
        'body' => 'I sent this message in under 10 minutes!'
    )

);