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
	return Redirect::to('/home');
});

Route::get('/home', function() {
    return View::make('home');
});


Route::get('/articles', 'TaskController@getArticles');

Route::get('/article/{num?}', 'TaskController@getArticle');

Route::get('/about', 'TaskController@getAbout');

Route::get('/contact', 'TaskController@getContact');

Route::post('/contact', 'TaskController@postContact');

Route::get('/thank/{name?}', 'TaskController@getThank');
