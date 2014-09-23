<?php
namespace Controllers\Admin;

use Controllers\BaseController;
use Repositories\Interfaces\GalleryInterface;
use View;

class GalleriesController extends BaseController {
  
  protected $gallery;
  
  /**
  * The layout that should be used for responses.
  */
  protected $layout = 'admin.galleries.layouts.gallery';
  
  public function __construct(GalleryInterface $gallery){
    $this->gallery = $gallery;
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
       * Show the form for creating a new resource.
       * GET /admin/galleries/create
       *
       * @return Response
       */
  public function create(){
    //
  }
  
  /**
       * Store a newly created resource in storage.
       * POST /admin/galleries
       *
       * @return Response
       */
  public function store(){
    //
  }
  
  /**
       * Display the specified resource.
       * GET /admin/galleries/{id}
       *
       * @param  int  $id
       * @return Response
       */
  public function show($id){
    //
  }
  
  /**
       * Show the form for editing the specified resource.
       * GET /admin/galleries/{id}/edit
       *
       * @param  int  $id
       * @return Response
       */
  public function edit($id){
    //
  }
  
  /**
       * Update the specified resource in storage.
       * PUT /admin/galleries/{id}
       *
       * @param  int  $id
       * @return Response
       */
  public function update($id){
    //
  }
  
  /**
       * Remove the specified resource from storage.
       * DELETE /admin/galleries/{id}
       *
       * @param  int  $id
       * @return Response
       */
  public function destroy($id){
    //
  }

}