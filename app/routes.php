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

Route::resource('galleries', 'Controllers\Admin\GalleriesController', array('only' => array('index', 'edit')));
Route::get('galleries/{galleries}/delete', array('uses' =>'Controllers\Admin\GalleriesController@destroy', 'as' =>'galleries.destroy'));

Route::resource('galleries.images', 'Controllers\Admin\Gallery\ImagesController', array('only' => array('edit')));
Route::get('galleries/{galleries}/images/{images}/delete', array('uses' =>'Controllers\Admin\Gallery\ImagesController@destroy', 'as' =>'galleries.images.destroy'));
  
Route::group(array('before' => 'csrf'), function() {
	Route::resource('galleries', 'Controllers\Admin\GalleriesController', array('only' => array('store', 'update')));
	Route::resource('galleries.images', 'Controllers\Admin\Gallery\ImagesController', array('only' => array('store', 'update')));
});
