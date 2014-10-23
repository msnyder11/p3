<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/LoremIpsumGenerator', function()
{
	$numparagraphs = 5;
	return View::make('loremipsum')
		->with('numparagraphs', $numparagraphs);
});

Route::post('/LoremIpsumGenerator', function()
{
	$generator = new Badcow\LoremIpsum\Generator(); 
	if($_POST['numparagraphs'] > 10)
	{
		$paragraphs = $generator->getParagraphs(5); 
		$numparagraphs = 5;
	}
	else 
	{
		$paragraphs = $generator->getParagraphs($_POST['numparagraphs']);
		$numparagraphs = $_POST['numparagraphs']; 
	}
	return View::make('loremipsum')
		->with('paragraphs', $paragraphs)
		->with('numparagraphs', $numparagraphs);
});

Route::get('/RandomUserGenerator', function()
{
	$numusers = 5;
	return View::make('randomuser')
		->with('numusers', $numusers);
});

Route::post('/RandomUserGenerator', function()
{
	$faker = Faker\Factory::create();
	if($_POST['numusers'] > 10)
	{
		$numusers = 5;
	}
	else 
	{
		$numusers = $_POST['numusers'];
	}
	
	return View::make('randomuser')
		->with('faker', $faker)
		->with('numusers', $numusers);
});

