<?php
namespace Controllers;

use Controllers\BaseController;
use Repositories\Interfaces\GalleryInterface;
use Repositories\Errors\Exceptions\ValidationException as ValidationException;
use View;
use Input;
use Redirect;


class GalleriesController extends BaseController{
	
	protected $gallery;
	
	/**
	* The layout that should be used for responses.
	*/
	protected $layout = 'galleries.layouts.gallery';
	
	public function __construct(GalleryInterface $gallery){
		$this->gallery = $gallery;
	}
	
	/**
	 * Display a listing of the resource.
	 * GET /galleries
	 *
	 * @return Response
	 */
	public function index(){
		$galleries = $this->gallery->findAll();
		$this->layout->content = View::make('admin.galleries.index')->with(compact('galleries'));
	}
}