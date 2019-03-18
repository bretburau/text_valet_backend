<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hey', 'Text@send');
    // $twilio = new Twilio();
    // $twilio->message('+19526871475', 'Pink Elephants and Happy Rainbows');

Route::post('/hey', 'Text@send');
