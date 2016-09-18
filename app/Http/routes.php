<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
  //  return "what the hell are you doing?";
});

Route::get('/test/{name?}', function($name=null) {
    return "yep you made it to test $name";
});

Route::get('tutorial', function(){
    return "yep, a tutorial page";
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/huh', function() {
    return "yep you made it here";
});
