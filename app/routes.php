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
Route::get('/info', function(){
	echo phpinfo();
});

Route::get('signin', function(){ return View::make('signin'); });

Route::post('signin', function(){
	$credentials = array(
		'username' => Input::get('username'),
		'password' => Input::get('password'),
	);

	if( Auth::attempt($credentials) ){
		return Redirect::to('admin/galleries');
	}
	return Redirect::to('signin');
});

Route::get('remind', array('as' => 'remind', 'uses' => 'Controllers\RemindersController@getRemind'));
Route::post('remind', array('as' => 'remind', 'uses' => 'Controllers\RemindersController@postRemind', 'before' => 'csrf'));

Route::get('reset/{token}', array('as' => 'reset', 'uses' => 'Controllers\RemindersController@getReset'));
Route::post('reset', array('as' => 'reset', 'uses' => 'Controllers\RemindersController@postReset', 'before' => 'csrf'));

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function(){
	
	Route::get('signout', array('as' => 'admin.signout', function(){ Auth::logout(); return Redirect::to('signin'); }));
	
	Route::resource('galleries', 'Controllers\Admin\GalleriesController', array('only' => array('index', 'edit')));
	Route::get('galleries/{galleries}/delete', array('uses' =>'Controllers\Admin\GalleriesController@destroy', 'as' =>'admin.galleries.destroy'));
	
	Route::resource('galleries.images', 'Controllers\Admin\Gallery\ImagesController', array('only' => array('edit')));
	Route::get('galleries/{galleries}/images/{images}/delete', array('uses' =>'Controllers\Admin\Gallery\ImagesController@destroy', 'as' =>'admin.galleries.images.destroy'));
	
	Route::group(array('before' => 'csrf'), function() {
		Route::resource('galleries', 'Controllers\Admin\GalleriesController', array('only' => array('store', 'update')));
		Route::resource('galleries.images', 'Controllers\Admin\Gallery\ImagesController', array('only' => array('store', 'update')));
	});
});