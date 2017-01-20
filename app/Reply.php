<?php

namespace App;

use Mpociot\BotMan\Messages\Message;
use Illuminate\Support\Facades\Log;

class Reply
{
    //
	public static function hello()
	{
		return collect([
			'¡Hola! ¿Qué hay?',
			'¿Qué hay de nuevo viejo?',
			'Holiiiiii',
			'¿Quiubo?',
			'Zup!',
			'¡Hola!, ¿Qué onda?',
			'¡Hola! ¿Cómo andas?',
			'¡Hola! ¿Qué dices?',
			'¡Hola !',
		])->random();
	}
	
	public static function encrypt()
	{
		return 'Dios ha matado un gatito por tu culpa...';
	}
	
	public static function newUser()
	{
		return '¿Eres nuevo? Te hace falta leer http://www.phptherightway.com';
	}
	
	public static function magento()
	{
		return 'Quememos todo y vayámonos a dormir...';
	}
	
	public static function goodDay()
	{
		return collect([
			'Buenas',
			'¿Qué tiene de buenos?',
			'Buen día',
			'Buenos días',
			'Hola buen día',
			'Buen día, ¿qué dices?',
		])->random();
	}
	
	public static function otherProgrammingLanguages()
	{
		return collect([
			'Uuuy, alguien ya se puso serio :fearful:',
			'Ay ay ay,  asústame panteón :fearful:',
			'Ay ay ay, a poco sí?',
		])->random();
	}
	
	public static function swear()
	{
		return collect([
			'Oye oye, tranquilo viejo!',
			'Con esa boquita comes?',
			'chamac@ groser@, te voy a lavar la boca con jabón para que se te quite lo pelad@',
		])->random();
	}
	
	public static function giphy()
	{
		return 'Jajajajajaja!';
	}
	
	public static function horror()
	{
		return 'El horror!!! El horror!!! :japanese_ogre:';
	}
	
	public static function dissatisfaction()
	{
		return '¬¬';
	}
	
	public static function iKnow()
	{
		return 'lo sé :troll:';
	}
	
	public static function epn()
	{
		return collect([
			'https://juanpabloramirezmx.files.wordpress.com/2014/09/epn.gif',
			'https://media4.giphy.com/media/ALa7IIhZ7v3Ve/giphy.gif'
		])->random();
	}
	
	public static function no()
	{
		return 'http://i.giphy.com/gX0wdXBYL8Ius.gif';
	}
	
	public static function slackUrl()
	{
		return 'http://chat.phpmexico.mx/';
	}
	
	public static function oldTimes()
	{
		return collect([
			'Uuuuu, ya llovió :rain_cloud:',
			'Oh, sí, recuerdo cuando también mezclaba php, mysql, html, css, y js en el mismo archivo.'
		])->random();
	}
	
	public static function oldDrupal()
	{
		return '¿Por qué no el 8? :sob:';
	}
	
	public static function pika()
	{
		return ':pika:';
	}
	
	public static function django()
	{
		return '¿Qué clase de Wordpress es éste? :information_desk_person: :beetle:';
	}
	
	public static function nsa()
	{
		return '*ERROR 2006 (HY000):* MySQL server has gone away; trying to reconnect to 6ba7b810-9dad-00c04fd430c8.developers.nsa.gov:3306…';
	}
	
	public static function slow()
	{
		return ':turtle:';
	}
	
	public static function iDontKnow()
	{
		return '¯\_(ツ)_/¯';
	}
	
	public static function obama()
	{
		return 'http://i.giphy.com/4cpqFamWB2dq0.gif';
	}
	
	public static function notUbuntu()
	{
		return collect([
			'fedora es mejor', 
			'debian es mejor',
		])->random();
	}
	
	public static function phpInfo()
	{
		return '```phpinfo() PHP Version => 7.0.5  System => Windows NT PHPMX-SLACKBOT 6.1 build 7601 (Windows 7 Professional Edition Service Pack 1) AMD64 Build Date => Mar 30 2016 09:56:10 Compiler => MSVC14 (Visual C++ 2015) Architecture => x64 Configure Command => cscript /nologo configure.js  "--enable-snapshot-build" "--enable-debug-pack" "--disable-zts" "--with-pdo-oci=c:\php-sdk\oracle\x64\instantclient_12_1\sdk,shared" "--with-oci8-12c=c:\php-sdk\oracle\x64\instantclient_12_1\sdk,shared" "--enable-object-out-dir=../obj/" "--enable-com-dotnet=shared" "--with-mcrypt=static" "--without-analyzer" "--with-pgo" Server API => Command Line Interface Virtual Directory Support => disabled Configuration File (php.ini) Path => C:\Windows Loaded Configuration File => C:\php\php.ini Scan this dir for additional .ini files => (none) Additional .ini files parsed => (none) PHP API => 20151012 PHP Extension => 20151012 Zend Extension => 320151012 Zend Extension Build => API320151012,NTS,VC14 PHP Extension Build => API20151012,NTS,VC14 Debug Build => no Thread Safety => disabled Zend Signal Handling => disabled Zend Memory Manager => enabled Zend Multibyte Support => provided by mbstring IPv6 Support => enabled DTrace Support => disabled  Registered PHP Streams => php, file, glob, data, http, ftp, zip, compress.zlib, https, ftps, phar Registered Stream Socket Transports => tcp, udp, ssl, sslv3, tls, tlsv1.0, tlsv1.1, tlsv1.2 Registered Stream Filters => convert.iconv.•, mcrypt.•, mdecrypt.•, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.•, consumed, dechunk, zlib.•  This program makes use of the Zend Scripting Language Engine: Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies```';
	}
	
	public static function damnBot()
	{
		return 'pinche tú';
	}
	
	public static function beer()
	{
		return collect([
			'https://i.giphy.com/jN0ygssTH2hoI.gif', 
			'http://thelibertarianrepublic.com/wp-content/uploads/2014/03/obama-beer-1.jpg', 
			'http://i.giphy.com/26tk0difUGevWJwUo.gif', 
			'http://i.giphy.com/OMYj7otYRfCAo.gif', 
			'http://i.giphy.com/e6TR9n00dL3JS.gif',
		])->random();
	}
	
	public static function cake()
	{
		return 'The cake is a lie';
	}
	
	public static function pronuer()
	{
		return collect([
			'http://i.imgur.com/E2TKZcx.jpg',
			'http://i2.cdn.cnn.com/cnnnext/dam/assets/160106111935-kim-jong-un-walks-large-169.jpg',
			'http://s1.ibtimes.com/sites/www.ibtimes.com/files/styles/embed/public/2016/11/15/kim-jong-un.JPG',
		])->random();
	}
	
	public static function letMeKnow()
	{
		return 'http://cdn.memegenerator.es/imagenes/memes/full/17/99/17996123.jpg';
	}
	
	public static function trump()
	{
		return collect([
			'https://www.youtube.com/watch?v=S65jqrHQi_c',
			'https://media.giphy.com/media/3o6gE1gnaojc9O5cD6/giphy.gif',
			'https://media.giphy.com/media/l0HlPicr0RptUHxtK/giphy.gif',
		])->random();
	}
	
	public static function rtfm()
	{
		return 'https://media.giphy.com/media/xTiQyKBuNLnYxzznhe/giphy.gif';
	}
	
	public static function spam()
	{
		return collect([
			'Felicidades, acabas de spamear un chingo de emails a todos los miembros de la comunidad, incluso a los inactivos... Espero que estés contento/a.',
			'Really?, Tanto te quieres hacer notar?',
			'Te hace falta usar @here',
			'Supongo que eres nueva/o por aquí; deja de usar `@channel` y usa `@here` en su lugar.',
			'¿No bastaba con un simple `@here` ?',
		])->random();
	}
	
	public static function heyBot()
	{
		return collect([
			'chale, y \'ora yo qué?',
			'qué pachuca por toluca',
			'que hongo',
			'que yo, ¿qué?',
			'whasaaaaaa !',
			'sup!',
			'¿Me hablaban?',
		])->random();
	}
	
	public static function valv()
	{
		return 'https://images01.olx-st.com/ui/52/42/14/05/o_1483293151_bb6e80afb0673c03df2b2e99ddf99243.jpg';
	}
	
	public static function gif()
	{
		return collect([
			'https://media.giphy.com/media/A4R8sdUG7G9TG/giphy.gif',
			'https://media.giphy.com/media/26gJzHn0bK5bqrlcs/source.gif',
			'https://media.giphy.com/media/26gst8RS4JMkhYsmc/giphy.gif',
			'https://media.giphy.com/media/13q7CYNKuDhliE/giphy.gif',
			'https://media.giphy.com/media/aMeHJiG2BiBPi/giphy.gif',
			'https://media.giphy.com/media/btb464Q9fyEUg/giphy.gif',
			'https://media.giphy.com/media/3o6Ztk1dwELVjzadPO/source.gif',
			'https://media.giphy.com/media/26ufe3JOh1sE61UlO/giphy.gif',
			'https://media.giphy.com/media/d31xsDHSoRzSABSU/giphy.gif',
			'https://media.giphy.com/media/26uffzPmBM4CxLlEA/giphy.gif',
			'https://media.giphy.com/media/vRZ1QvNPA9rC8/giphy.gif',
			'https://media.giphy.com/media/x21b1Xd4SV24E/giphy.gif',
			'https://media.giphy.com/media/3o85xrzGTHsyWBtKj6/giphy.gif',
			'https://media.giphy.com/media/xTiTnvwHqHsitA9jws/giphy.gif',
			'https://media.giphy.com/media/26tPo0pwBBmxxSUk8/giphy.gif',
			'https://media.giphy.com/media/xTiTnCIgeVGM9P0k6I/giphy.gif',
			'https://media.giphy.com/media/xTiTnrDF9suI6wXSrS/giphy.gif',
		])->random();
	}
	
	public static function joke()
	{
		$crawler = \Goutte::request('GET', 'http://www.chistescortos.eu/top');
		$jokes = $crawler->filter('a.oldlink')->extract(array('_text'));
		return collect($jokes)->random();
	}
}

