<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpociot\BotMan\BotMan;

class BotController extends Controller
{
    //
    public function heardHello(BotMan $bot)
    {
    	$bot->reply('hola.');
    }
}
