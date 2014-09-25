<?php

namespace Controllers\Admin\Gallery;

use Controllers\BaseController;
use Repositories\Interfaces\ImageInterface;
use Repositories\Interfaces\GalleryInterface;
use View;
use Input;
use Response;


class ImagesController extends BaseController{

	protected $image;
	protected $gallery;
	protected $layout = 'admin.images.layouts.image';


	public function __construct(ImageInterface $image, GalleryInterface $gallery){
    	$this->image = $image;
    	$this->gallery = $gallery;
  	}


	/**
	 * Display a listing of the resource.
	 * GET /admin/Galeries/{id}/images
	 *
	 * @return Response
	 */
  	public function index($gallery_id){
  		$gallery = $this->gallery->findById($gallery_id);
   		$images = $this->image->findAllByGallery($gallery_id);
   		$this->layout->content = View::make('admin.images.index')->with(compact('gallery', 'images'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/galleries/{id}/images/
	 *
	 * @return Response
	 */
	public function store($gallery_id){
		$input = Input::all();
		$image = $this->image->storeInGallery($gallery_id, $input);
        return Response::json(array('success' => true, 'file' => asset($image->largethumb), 'name' => $image->name, 'id' => $image->id));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/galleries/{id}/images/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($gallery_id, $id){
		$gallery = $this->gallery->findById($gallery_id);
		$image = $this->image->findByIdInGallery($gallery->id, $id);
   		$this->layout->content = View::make('admin.images.edit')->with(compact('gallery','image'));//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/galleries/{id}/images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($gallery_id, $id){
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/galleries/{id}/images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($gallery_id, $id){
		//
	}

}
