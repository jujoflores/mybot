<?php

namespace App;

use \App\Reply;
use Mpociot\BotMan\BotMan;
use Mpociot\BotMan\Messages\Message;
use Illuminate\Support\Facades\Log;

class MyBot
{
    //
	public function heardHello(BotMan $bot)
	{
		$bot->reply('hola');
		
	}
	
	protected function cleanText($message)
	{
		$message = trim($message);
		$message = strtolower($message);
		
		return $message; 
	}
	
	public function handleRandomChannel(BotMan $bot, $message)
	{
		$replyText = '';
		$message = $this->cleanText($message);
		
		$configs = \Config::get('slackChannels.random');

		foreach($configs as $config){
			foreach($config['patterns'] as $pattern){
				$pattern = '/(^|\b)'.str_replace('/', '\/', $pattern).'/i';
				//Log::info("pattern: " . $pattern);
				if($pattern && preg_match($pattern, $message)){
					Log::info("match: " . $pattern);
					$replyText = $config['callback']();
					break 2;
				}
			}
		}
		
		$lastReply = $bot->channelStorage()->get('lastReply');
		//Log::info('lastReply: ' . $lastReply);
		if($replyText && $lastReply != $replyText){
			$bot->channelStorage()->save([
				'lastReply' => $replyText
			]);
			return $bot->reply($replyText);
		}
		
		return;
	}
	
	public function handleJobBoardChannel(BotMan $bot, $keyword)
	{
		$bot->reply('handleJobBoardChannel');
	}
	
	public function handleGeneralChannel(BotMan $bot, $keyword)
	{
		$bot->reply('handleGeneralChannel');
	}
}

