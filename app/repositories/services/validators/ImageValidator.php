<?php

namespace Repositories\Services\Validators;

class ImageValidator extends Validation{

	/**
	* Validation rules
	*/
	public static $rules = array(
		'gallery_id' => 'integer|exists:galleries,id',
		'name' => 'required|alpha_num_spaces',
		'comment' => 'required',
		'status' => 'integer|in:0,1',
		'file' => 'image|required|max:12000000',
		'main_image' => 'required|boolean',
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