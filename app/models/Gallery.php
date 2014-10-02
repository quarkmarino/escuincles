<?php

namespace Models;

use Eloquent;
use File;

class Gallery extends \Eloquent {
	protected $fillable = array('author_id', 'title', 'comment', 'status', 'tags', 'status', 'description');
	
	//functionality that is run just after class contruction
	public static function boot(){
		parent::boot();

		//action that runs on the deleting event before the resource is deleted
		//deletes all the associated images
		static::deleting(function($gallery){
			$gallery->images()->get()->each(function($image){
				$image->delete();
			});
			$path = $gallery->getImagesPath(true);
			if(File::exists($path))
				File::deleteDirectory($path);
			//if(no more images on gallery)
				//return true
			//otherwise
				//return false
		});
	}
	
	public function scopeActive($query){
		return $query->whereStatus(1);
	}
	
	public function author(){
		return $this->belongsTo('Models\User', 'user_id');
	}

	public function images(){
		return $this->hasMany('Models\Gallery\Image')->whereMainImage(0);
	}
	
	public function mainImage(){
		return $this->hasOne('Models\Gallery\Image')->whereMainImage(1);
	}
	
	//get the galleries folder's path for the associated images
	public function getImagesPath($absolute = false, $imagesDir = 'images/'){
		//defines images/galleries/{gallery_id}_{gallery_title}/
		$path = $imagesDir . 'galleries/' . $this->id . '_' . str_replace(' ', '_', $this->title) . '/';
		
		//defines file system absolute path
		$abs_path = public_path() . '/' . $path;
		//create path if not exist/
		if( !File::exists($abs_path) )
			File::makeDirectory($abs_path, 0777, true, true);
			
		//returns path as requested
		return $absolute ? $abs_path : $path;
	}
}