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



//Route::group(array('group' => 'admin'), function(){
  Route::resource('galleries', 'Controllers\Admin\GalleriesController', array('except' => array('destroy', 'create', 'show' )));
  Route::get('galleries/{galleries}/delete',array('uses' =>'Controllers\Admin\GalleriesController@destroy', 'as' =>'galleries.destroy' ));

  Route::resource('galleries.images', 'Controllers\Admin\Gallery\ImagesController', array('except' => array('create', 'show', 'destroy')));
  Route::get('galleries/{galleries}/images/{images}/delete',array('uses' =>'Controllers\Admin\Gallery\ImageController@destroy', 'as' =>'galleries.images.destroy' ));  

//});
