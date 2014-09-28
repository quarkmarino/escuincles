<?php
namespace Controllers\Admin;

use Controllers\BaseController;
use Repositories\Interfaces\GalleryInterface;
use Repositories\Interfaces\ImageInterface;
use View;
use Input;
use Redirect;


class GalleriesController extends BaseController{
  
  protected $gallery;
  protected $image;
  
  /**
  * The layout that should be used for responses.
  */
  protected $layout = 'admin.galleries.layouts.gallery';
  
  public function __construct(GalleryInterface $gallery, ImageInterface $image){
    $this->gallery = $gallery;
    $this->image = $image;
  }
  
  /**
       * Display a listing of the resource.
       * GET /admin/galleries
       *
       * @return Response
       */
  public function index(){
    $galleries = $this->gallery->findAll();
    $this->layout->content = View::make('admin.galleries.index')->with(compact('galleries'));
  }
  
  
  /**
       * Store a newly created resource in storage.
       * POST /admin/galleries
       *
       * @return Response
       */
  public function store(){
    $input = Input::all();
    $gallery = $this->gallery->store(1,$input);
    return Redirect::route('galleries.edit',$gallery->id);
  }
  
  /**
       * Show the form for editing the specified resource.
       * GET /admin/galleries/{id}/edit
       *
       * @param  int  $id
       * @return Response
       */
  public function edit($id){
    $gallery = $this->gallery->findById($id);
    $imageInstance = $this->image->instance();
    $this->layout->content = View::make('admin.galleries.edit')->with(compact('gallery','imageInstance'));
  }
  
  /**
       * Update the specified resource in storage.
       * PUT /admin/galleries/{id}
       *
       * @param  int  $id
       * @return Response
       */
  public function update($id){
    $input = Input::all();
	$gallery = $this->gallery->update($id, $input);
	return Redirect::route('galleries.edit', $gallery->id);
  }
  
  /**
       * Remove the specified resource from storage.
       * DELETE /admin/galleries/{id}
       *
       * @param  int  $id
       * @return Response
       */
  public function destroy($id){
    $this->gallery->destroy($id);
	return Redirect::route('admin.galleries.index');//->with('success', 'The gallery has been deleted');
  }

}