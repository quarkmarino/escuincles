<?php

namespace Models\Gallery;

use Eloquent;
use Intervention\Image\Facades\Image as IntrvImage;

class Image extends Eloquent {
	protected $fillable = array();
	
	protected $touches = array('gallery');
	
	protected $root = 'images/';
	
	public static function boot(){
		parent::boot();

		static::saving(function($image){
			if(\Input::hasFile('file')){
				$image->largethumb = $image->grabImage('largethumb', array(250, 185));
				$image->thumb = $image->grabImage('thumb', 100);
				$image->minithumb = $image->grabImage('minithumb', array(40, 30));
				$image->slide = $image->grabImage('slide', array(757, 478));
			}
		});

		static::updated(function($image){
			//dd("updated");
		});

		static::deleting(function($image){
			$path = $image->getDirPath(true);
			if(\File::exists($path))
				\File::deleteDirectory($path);
		});
	}
	
	public function scopeActive($query){
		return $query->whereStatus(1);
	}
	
	public function gallery(){
		return $this->belongsTo('Models\Gallery');
	}
	
	public function setNameAttribute($value){
		$this->attributes['name'] = ucfirst($value);
	}

	public function setDirnameAttribute($value){
		$this->attributes['dirname'] = uniqid();
	}
	
	public function setFileAttribute($value){
		if(\Input::hasFile('file')){
			$image = IntrvImage::make( \Input::file('file')->getRealPath() );
			//$file_path = $this->getDirPath() . \Hash::make((string)(new \DateTime)->getTimeStamp());
			$image->save($this->getDirPath(true) . 'original.jpg');
			$value = $this->getDirPath() . $image->basename;
		}
		//dd($this->attributes['file'], $this->file, $value);
		$this->attributes['file'] = $value;
	}
	
	public function grabImage($name = 'thumb', $resize = null, $image = null, $save = false){
		
		if($image === null)
			$image = IntrvImage::make( public_path() . '/' . $this->file );
			
		if($resize !== null){
			if(is_array($resize))
				$image->grab($resize[0], $resize[1]);
			else
				$image->grab($resize);
		}
		
		$file_path = $this->getDirPath(true);
		$image->save($file_path . "$name.jpg");
		
		$image_fullname = $this->getDirPath() . $image->basename;
		$this->attributes[$name] = $image_fullname;
		
		if($save)
			$this->save();
		return $image_fullname;
	}

	public function getDirPath($absolute = false){
		if($this->catalog_id !== NULL)
			$path = $this->catalog->getImagesPath();
		elseif($this->product_id !== NULL)
			$path = $this->product->getImagesPath();
		elseif($this->gallery_id !== NULL)
			$path = $this->gallery->getImagesPath();
			
		$path .=  $this->dirname . '/';
		$abs_path = public_path() . '/' . $path;
		if( !\File::exists($abs_path) )
			\File::makeDirectory($abs_path, 0777, true, true);
		return $absolute ? $abs_path : $path;
	}
}