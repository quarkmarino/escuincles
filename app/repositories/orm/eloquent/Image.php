<?php

namespace Repositories\ORM\Eloquent;

use Repositories\Interfaces\ImageInterface;
use Repositories\Services\Validators\ImageValidator;
use Repositories\Errors\Exceptions\NotFoundException as NotFoundException;
 
class Image implements ImageInterface {

  protected $validator;

  public function __construct(ImageValidator $validator){
    $this->validator = $validator;
  }
  
  /**
  	Finds an Image just by id
  */

  public function findById($id){
    //$image = \Models\Image::where('id', $id)->first();
    //if(!$image) throw new NotFoundException('Image Not Found');
    $image = \Models\Gallery\Image::find($id);
    if(!$image) throw new NotFoundException('Image Not Found');
    return $image;
  }
  
  /**
  	Finds an Image that belongs to a specific Gallery
  */
  
   public function findByIdInGallery($gallery_id, $id){
    //$image = \Models\Image::where('id', $id)->first();
    //if(!$image) throw new NotFoundException('Image Not Found');
    $image = \Models\Gallery\Image::find($id);
    if(!$image || $image->gallery_id != $gallery_id) throw new NotFoundException('Image Not Found');
    return $image;
  }

  /**
  	Finds all Images ordered by creation time in decending order and paginates in chunks of 15 items
  */

  public function findAll(){
    return \Models\Gallery\Image::orderBy('created_at', 'asc')
    ->paginate(15);
  }
  
  /**
  	Finds 15 paginated Images ordered by creation time in decending order 
  */

  public function findAllByGallery($gallery_id){
    return \Models\Gallery\Image::whereGalleryId($gallery_id)
    ->orderBy('created_at', 'desc')
    ->paginate(15);
  }
  
  /**
  	Paginates Images in chucks, defined by the finder queries
  */

  public function paginate($limit = null){
    return \Models\Gallery\Image::paginate($limit);
  }

  /**
   * Validates and create the image resource
   * @param array $data the data with which the model will be populated
   * @return the created image model
  */

  public function storeInGallery($gallery_id, $data){
    $data = array_merge(array('dirname' => '', 'gallery_id' => $gallery_id), $data);
    $this->validation($data);
    $image = \Models\Gallery\Image::create($data);
    return $image;
  }

  /**
   * Finds the the image resource by id, validates the data, the fills the model ands save it
   * @param integer $id the id of the resource
   * @param array $data the data with which the model will be filled
   * @return the updated image model 
  */

  /*public function update($id, $data){
    $image = $this->findById($id);
    $this->validation($data);
    $image->fill($data);
    $image->save();
    return $image;
  }*/

   public function updateInGallery($gallery_id, $id, $data){
    $image = $this->findByIdInGallery($gallery_id, $id);
    $this->validation($data);
    $image->fill($data);
    $image->save();
    return $image;
  }


  /**
   * Finds the the image resource by id and deletes it
   * @param integer $id the id of the resource
   * @return the updated image model 
  */

  /*public function destroy($id){
    $image = $this->findById($id);
    return $image->delete();
  }*/

  public function destroyInGallery($gallery_id, $id){
    $image = $this->findByIdIn($gallery_id, $id);
    return $image->delete();
  }

  public function validation($data){
    return $this->validator->validate($data); 
  }

  public function instance($data = array()){
    return new \Models\Gallery\Image($data);
  }
  
}