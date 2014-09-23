<?php

namespace Repositories\Services\Providers;

use Illuminate\Support\ServiceProvider;

class EloquentServiceProvider extends ServiceProvider {

	public function register(){
      $this->app->bind( 'Repositories\\Interfaces\\GalleryInterface', 'Repositories\\ORM\\Eloquent\\Gallery' );
      $this->app->bind( 'Repositories\\Interfaces\\ImageInterface', 'Repositories\\ORM\\Eloquent\\Image' );
    }
}