<?php
use Mpociot\BotMan\BotMan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
	return "hello world";
});
Route::get('/login/slack', function(){
	return Socialite::with('slack')
	->scopes(['bot'])
	->redirect();
});
Route::get('/connect/slack', function(\GuzzleHttp\Client $httpClient){
	$response = $httpClient->post('https://slack.com/api/oauth.access', [
		'headers' => ['Accept' => 'application/json'],
		'form_params' => [
			'client_id' => env('SLACK_KEY'),
			'client_secret' => env('SLACK_SECRET'),
			'code' => $_GET['code'],
			'redirect_uri' => env('SLACK_REDIRECT_URI'),
		]
	]);
	$bot_token = json_decode($response->getBody())->bot->bot_access_token;
	echo "Your Bot Token is: ". $bot_token. " place it inside your .env as SLACK_TOKEN";
});
Route::post('/slack', function(\Illuminate\Http\Request $request){

	$payload = $request->json();

	if ($payload->get('type') === 'url_verification') {
		return $payload->get('challenge');
	}

	if(isset($request->event['bot_id']) || (isset($request->event['subtype']) && $request->event['subtype'] == 'slackbot_response')){
		return;
	}
	
	$botman = app('botman');
	
	if(substr($request->event['channel'], 0, 1) === 'D'){
		//Direct Message
		$botman->hears('{keyword}', 'App\MyBot@handleRandomChannel');
	}else{
		switch($request->event['channel']){
			case 'C3TUM7QJY':
				//channel testbot2
				$botman->hears('{keyword}', 'App\MyBot@handleRandomChannel');
				break;
			case 'C0PDNJ0MQ':
				//channel random
				$botman->hears('{keyword}', 'App\MyBot@handleRandomChannel');
				break;
			case 'C0PPU2NTD':
				//channel bolsadetrabajo
				$botman->hears('{keyword}', 'App\MyBot@handleJobBoardChannel');
				break;
			case 'C0PDPQJ3B':
				//channel general
				$botman->hears('{keyword}', 'App\MyBot@handleGeneralChannel');
				break;
			default:
				$botman->hears('hello', 'App\MyBot@heardHello');
		}
	}
	
	$botman->listen();
	
	Log::info(print_r($request->event, true));
});

