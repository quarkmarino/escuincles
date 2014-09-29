<?php

namespace Controllers\Admin\Gallery;

use Controllers\BaseController;
use Repositories\Interfaces\ImageInterface;
use Repositories\Interfaces\GalleryInterface;
use Repositories\Errors\Exceptions\ValidationException as ValidationException;
use View;
use Input;
use Response;
use Redirect;


class ImagesController extends BaseController{

	protected $image;
	protected $gallery;
	protected $layout = 'admin.images.layouts.image';

	public function __construct(ImageInterface $image, GalleryInterface $gallery){
    	$this->image = $image;
    	$this->gallery = $gallery;
  	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/galleries/{id}/images/
	 *
	 * @return Response
	 */
	public function store($gallery_id){
		$input = Input::all();
		try{
			$image = $this->image->storeInGallery($gallery_id, $input);
			if($image->main_image == 1)
				return Redirect::route('galleries.edit', $image->gallery_id);
			else
				return Response::json(array('success' => true, 'id' => $image->id, 'slide' => asset($image->slide), 'file' => asset($image->file), 'name' => $image->name, 'comment' => $image->comment, 'gallery' => array( 'id' => $image->gallery->id )));	
		}
		catch(ValidationException $e){
			if(isset($input['main_image']) && $input['main_image'] == 1)
				return Redirect::route('galleries.edit', $gallery_id)->withErrors($e->getErrors());
			else
				return Response::json(array('success' => false, 'error' => 'Los datos provistos no son correctos.', 'errors' => $e->getErrors()->toArray()));
		}
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
		$this->image->destroyInGallery($gallery_id, $id);
		return Redirect::route('galleries.edit', $gallery_id);//->with('success', 'The image has been deleted');
	}

}
