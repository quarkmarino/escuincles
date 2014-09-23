<?php
namespace Controllers;

use View;

class HomeController extends BaseController {
	
	/**
	* The layout that should be used for responses.
	*/
  	protected $layout = 'layouts.main';

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@index');
	|
	*/

	public function index()
	{
		$this->layout->content = View::make('index');
	}

}
