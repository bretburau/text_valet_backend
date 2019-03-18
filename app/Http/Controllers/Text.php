<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';
use Twilio\Rest\Client;
use Illuminate\Http\Request;

class Text extends Controller
{
    public function send(Request $request)
    {
        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = $_ENV['TWILIO_SID'];
        $auth_token = $_ENV['TWILIO_TOKEN'];
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
        //getenv('TWILIO_SID'), getenv('TWILIO_TOKEN'), "+19526871475"
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+17639511381";
        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+19526871475',
            array(
                'from' => $twilio_number,
                'body' => 'I sent this message in under 10 minutes! Wowsers!'
            )
        );
        return $request->all();

    }
}
