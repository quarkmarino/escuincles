<?php

namespace Controllers\Admin\Gallery;

use Controllers\BaseController;

class ImagesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/Galeries/{id}/images
	 *
	 * @return Response
	 */
  	public function index($gallery_id)
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/galleries/{id}/images/create
	 *
	 * @return Response
	 */
	public function create($gallery_id)
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/galleries/{id}/images/
	 *
	 * @return Response
	 */
	public function store($gallery_id)
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET  /admin/galleries/{id}/images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($gallery_id, $id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/galleries/{id}/images/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($gallery_id, $id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/galleries/{id}/images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($gallery_id, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/galleries/{id}/images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($gallery_id, $id)
	{
		//
	}

}
