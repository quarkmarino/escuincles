<?php

namespace Models;

use Eloquent;

class Gallery extends \Eloquent {
	protected $fillable = array('author_id', 'name', 'comment', 'status', 'tags', 'status', 'description', 'title');

	public function images(){
		return $this->hasMany('Models\Gallery\Image');
	}
}