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

Route::get('addimage', function(){
    $image=new \App\Image;
    $image->filename="hithere1.jpg";
    $image->filesize="150kB";
    $image->dimensions="1000, 1000";
    $image->save();
    //return "made it";
    $returnedimage=\App\Image::find(1);
    return "found filename: $returnedimage->filename";
});

Route::get('imageinfo/{id}', function($id){
    $image=\App\Image::findOrFail($id);
    return "found $image->filename that is $image->filesize large and
      has dimension $image->dimensions";
});

Route::get('changeimage/{id}/{newname}', function($id, $newname){
    $image=\App\Image::findOrFail($id);
    $image->filename=$newname;
    $image->save();
    return "done";
});

Route::get('/test/{name?}', function($name=null) {
    return "yep you made it to test $name";
});

Route::get('tutorial', function(){
    return "yep, a tutorial page";
});

Route::get('doesthiswork/{name?}', function($name=null){
    $name=strtoupper($name);
    return "sure does. Man, $name, you're awesome";
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/huh', function() {
    return "yep you made it here";
});
