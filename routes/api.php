<?php

use Illuminate\Http\Request;
use App\Modules\Twilio;

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

Route::get('/hey', function()
{
    $twilio = new Twilio(getenv('TWILIO_SID'), getenv('TWILIO_TOKEN'), "+19526871475");
    $twilio->message('+19526871475', 'Pink Elephants and Happy Rainbows');
});