<?php

namespace Models\Gallery;

use Eloquent;
use Intervention\Image\Facades\Image as IntrvImage;
use Input;
use File;

class Image extends Eloquent {
	protected $fillable = array('gallery_id','author_id', 'name', 'comment', 'tags', 'status', 'main_image', 'file', 'dirname');
	
	//updates the parent 'updated_at' timestamps on models change
	protected $touches = array('gallery');
	
	protected $root = 'images/';
	
	//functionality that is run just after class contruction
	public static function boot(){
		parent::boot();
		
		//action that runs on the saving event before the resource is saved
		static::saving(function($image){
			//if an image file is received from form and the "file" path attribute is defined
			if(Input::hasFile('file') && !empty($image->file)){
				//create different image sizes
				$image->largethumb = $image->grabImage('largethumb', array(255, 255));
				$image->thumb = $image->grabImage('thumb', 100);
				$image->minithumb = $image->grabImage('minithumb', array(40, 30));
				$image->slide = $image->grabImage('slide', array(391, 255));
			}
		});

		static::updated(function($image){
			//dd("updated");
		});
		
		//removes the image directory asociated
		static::deleting(function($image){
			$path = $image->getDirPath(true);
			if(File::exists($path))
				File::deleteDirectory($path);
		});
	}
	
	//defines the Active/Inactive staus scope
	public function scopeActive($query){
		return $query->whereStatus(1);
	}
	
	//defines parent gallery relationship
	public function gallery(){
		return $this->belongsTo('Models\Gallery');
	}
	
	//normalizes the image's name attribute e.g. " erE  " to "Ere"
	public function setNameAttribute($value){
		$this->attributes['name'] = ucfirst(strtolower(trim($value)));
	}

	//defines a unique ID for the folders name that holds all the image's sizes
	public function setDirnameAttribute($value){
		$this->attributes['dirname'] = uniqid();
	}
	
	//sets the "file" path atribute from the original image received from form
	public function setFileAttribute($value){
		//if a image "file" is received from the form
		if(Input::hasFile('file')){
			//instantiates an Intervention Image object from temp received file
			$image = IntrvImage::make( Input::file('file')->getRealPath() );
			//and saves it as images/galleries/{gallery_id}_{gallery_name}/{unique_dirname}/original.jpg
			$image->save($this->getDirPath(true) . 'original.jpg');
			//sets $value to the previous file path
			$value = $this->getDirPath() . $image->basename;
		}
		//stores file path to the original image
		$this->attributes['file'] = $value;
	}
	
	//normalizes the image's tags attribute e.g. " taG1  ,TAG_2," to "Tag1, Tag_2"
	public function setTagsAttribute($value){
		$tags = explode(',', $value);
		$i = 0;
		$tags2 = array();
		foreach($tags as $key => $tag){
			if(!empty($tag))
				$tags2[$i++] = ucfirst(strtolower(trim($tag)));
		}
		$this->attributes['tags'] = implode(', ', $tags2);
	}
	
	//resizes the original image to a custom size and returns the new sized image relative web file path
	public function grabImage($name = 'thumb', $resize = null, $image = null, $save = false){
		//instantiates an image from the "file" path attribute if not provided as a parameter
		if($image === null)
			$image = IntrvImage::make( public_path() . '/' . $this->file );
			
		//resize parameter as an array [{length}, {height}] or as a integer {square}
		if($resize !== null){
			if(is_array($resize))
				$image->grab($resize[0], $resize[1]);
			else
				$image->grab($resize);
		}
		
		//gets absolute {filesystem_root..}/images/galleries/{gallery_id}_{gallery_name}/{unique_dirname}/
		$file_path = $this->getDirPath(true);
		
		//saves the resized image {filesystem_root..}/images/galleries/{gallery_id}_{gallery_name}/{unique_dirname}/{name}.jpg
		$image->save($file_path . "$name.jpg");
		
		//gets the web relative image file path images/galleries/{gallery_id}_{gallery_name}/{unique_dirname}/{name}.jpg
		$image_web_file_path = $this->getDirPath() . $image->basename;
		return $image_web_file_path;
	}

	public function getDirPath($absolute = false){
		//sets $path to /images/galleries/{gallery_id}_{gallery_name}/
		$path = $this->gallery->getImagesPath();
		
		//appends {unique_dirname} to $path
		$path .=  $this->dirname . '/';
		
		//defines file system absolute path
		$abs_path = public_path() . '/' . $path;
		
		//create absolute path if not exist
		if( !File::exists($abs_path) )
			File::makeDirectory($abs_path, 0777, true, true);
			
		//returns path as requested
		return $absolute ? $abs_path : $path;
	}

	public function getFileAttribute($value){
		if(empty($value))
			return '/images/no-image.jpg';
		return $value;
	}

	public function getLargethumbAttribute($value){
		if(empty($value))
			return '/images/no-image-largethumb.jpg';
		return $value;
	}

	public function getThumbAttribute($value){
		if(empty($value))
			return '/images/no-image-thumb.jpg';
		return $value;
	}

	public function getMinithumbAttribute($value){
		if(empty($value))
			return '/images/no-image-minithumb.jpg';
		return $value;
	}

	public function getSlideAttribute($value){
		if(empty($value))
			return '/images/no-image-slide.jpg';
		return $value;
	}
}