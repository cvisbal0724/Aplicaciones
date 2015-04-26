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
	return View::make('login');
});


Route::get('/test', function() { return Facebook::loginUrl(); });

Route::get('/test2', function() { return Facebook::getUser(); });

Route::get('/image', function() { $profile = Facebook::api('/me?fields=id,name,first_name,last_name,username,email,gender,birthday,hometown,location,picture.width(100)'); });


//Route::get('/logout', function() { return Facebook::logoutUrl(); });


Route::get('/consulta', function() { return Facebook::api(array( 'method' => 'fql.query', 'query' => "SELECT uid, sex, username, birthday, education, work FROM user WHERE uid = me()", )); });



Route::get('/logout','AuthController@getLoggedOut');

Route::get('/fbauth/{auth?}','AuthController@getFacebookLogin');
