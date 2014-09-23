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

Route::get('/', 'Controllers\HomeController@index');



//Route::group(array('domain' => 'admin.escuincles.quarkmarino.kd.io'), function(){
  Route::resource('galleries', 'Controllers\Admin\GalleriesController');
  Route::resource('galleries.images', 'Controllers\Admin\Gallery\ImagesController');
//});
