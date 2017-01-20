<?php

return [
	'random' => [
		[
			'patterns' => ['hola'],
			'callback' => '\App\Reply::hello',
		],
		[
			'patterns' => ['encriptar'],
			'callback' => '\App\Reply::encrypt',
		],
		[
			'patterns' => ['soy nuev[ao]'],
			'callback' => '\App\Reply::newUser',
		],
		[
			'patterns' => ['magento'],
			'callback' => '\App\Reply::magento',
		],
		[
			'patterns' => ['buen(os)? d[ií]a[s]?', 'buenas (tardes|noches|madrugadas)',],
			'callback' => '\App\Reply::goodDay',
		],
		[
			'patterns' => ['/giphy', 'imgur'],
			'callback' => '\App\Reply::giphy',
		],
		[
			'patterns' => ['python', 'java', 'c\+\+', 'c#', 'pascal'],
			'callback' => '\App\Reply::otherProgrammingLanguages',
		],
		[
			'patterns' => [
				'panista', 'pri', 'priista', 'prd', 'prdista', 'morena', 'amlo', 'peje', 'partido verde', 'sap',
				'quesadilla[s]? sin queso'
			],
			'callback' => '\App\Reply::horror',
		],
		[
			'patterns' => [
				'put[ao][s]?', 'chinga[n]?d[ao]', 'chinga[rs]', 'pendej[ao][s]?', 'verga[s]?', 'verguero'
			],
			'callback' => '\App\Reply::swear',
		],
		[
			'patterns' => ['¬¬'],
			'callback' => '\App\Reply::dissatisfaction',
		],
		[
			'patterns' => [
				'<@USLACKBOT> es un loquillo', '<@USLACKBOT> eres un loquillo', '<@USLACKBOT> troll', 'este <@USLACKBOT> es un troll'
			],
			'callback' => '\App\Reply::iKnow',
		],
		[
			'patterns' => ['epn', 'peña'],
			'callback' => '\App\Reply::epn',
		],
		[
			'patterns' => ['slackin'],
			'callback' => '\App\Reply::slackUrl',
		],
		[
			'patterns' => ['netscape', 'code igniter', 'jquery'],
			'callback' => '\App\Reply::oldTimes',
		],
		[
			'patterns' => ['drupal 7', 'drupal7'],
			'callback' => '\App\Reply::oldDrupal',
		],
		[
			'patterns' => [':pika:'],
			'callback' => '\App\Reply::pika',
		],
		[
			'patterns' => ['django'],
			'callback' => '\App\Reply::django',
		],
		[
			'patterns' => ['NSA'],
			'callback' => '\App\Reply::nsa',
		],
		[
			'patterns' => ['internet explorer', 'ie'],
			'callback' => '\App\Reply::slow',
		],
		[
			'patterns' => [
				'no sé', 'quien sabe', 'sepa', 'ni idea', 'no tengo idea', 'who knows', 'i don\'t know',
				'i do not know', 'i dont know'
			],
			'callback' => '\App\Reply::iDontKnow',
		],
		[
			'patterns' => ['obama'],
			'callback' => '\App\Reply::obama',
		],
		[
			'patterns' => ['ubuntu'],
			'callback' => '\App\Reply::notUbuntu',
		],
		[
			'patterns' => ['phpinfo();'],
			'callback' => '\App\Reply::phpInfo',
		],
		[
			'patterns' => ['pinche <@USLACKBOT>', 'che <@USLACKBOT>', 'che slackbot'],
			'callback' => '\App\Reply::damnBot',
		],
		[
			'patterns' => ['chela[s]?', 'cerveza[s]?'],
			'callback' => '\App\Reply::beer',
		],
		[
			'patterns' => ['cake', 'pastel'],
			'callback' => '\App\Reply::cake',
		],
		[
			'patterns' => ['pronuer'],
			'callback' => '\App\Reply::pronuer',
		],
		[
			'patterns' => ['av[ií]senme'],
			'callback' => '\App\Reply::letMeKnow',
		],
		[
			'patterns' => ['trump'],
			'callback' => '\App\Reply::trump',
		],
		[
			'patterns' => ['rtfm'],
			'callback' => '\App\Reply::rtfm',
		],
		[
			'patterns' => ['<!channel>'],
			'callback' => '\App\Reply::spam',
		],
		[
			'patterns' => ['<@USLACKBOT>', 'slackbot', 'mybot', '<@U3T4K8MFT>'],
			'callback' => '\App\Reply::heyBot',
		],
		[
			'patterns' => ['nope'],
			'callback' => '\App\Reply::no',
		],
		[
			'patterns' => ['gif'],
			'callback' => '\App\Reply::gif',
		],
		[
			'patterns' => ['<@U3T4K8MFT> cuenta un chiste', 'cuenta un chiste'],
			'callback' => '\App\Reply::joke',
		],
	],
];