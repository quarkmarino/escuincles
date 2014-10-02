<?php

namespace Repositories\Services\Validators;

class GalleryValidator extends Validation{

	/**
	* Validation rules
	*/
	public static $rules = array(
		'title' => 'required|alpha_num_spaces',
		'tags' => 'required',
		'comment' => 'required',
		'description' => 'required',
		'status' => 'integer|in:0,1',
	);

	/**
	* Validation messages
	*/
	/*public static $messages = array(
		//'alpha_num' => 'El :attribute debe contener solo caracteres alfanumericos.',
		'max' => 'El :attribute puede ser de maximo :max caracteres.',
		'newsletters.in' => 'El parametro de suscripcion solo puede tener valores [:values]',
	);*/
}