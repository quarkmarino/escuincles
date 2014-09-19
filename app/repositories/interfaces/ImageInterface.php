<?php

namespace Repositories\Interfaces;
 
interface ImageInterface {
  public function findById($id);
  public function findByIdInGallery($gallery_id, $id);
  public function findAll();
  public function findAllByGallery($gallery_id);
  public function paginate($limit = null);
  public function storeInGallery($gallery_id, $data);
  //public function update($id, $data);
  public function updateInGallery($gallery_id, $id, $data);
  //public function destroy($id);
  public function destroyInGallery($gallery_id, $id);
  public function validation($data);
  public function instance();
}