<!-- IMAGES CREATE/EDIT FORM -->
<div class="col-sm-12 col-md-12">
	@if(isset($imageInstance))
		{{ Form::model($imageInstance, array('route' => array('galleries.images.store', $gallery->id), 'class' => 'form-style validate clearfix', 'id' => 'image-create-form') ) }}
	@elseif(isset($image))
		{{ Form::model($image, array('route' => array('galleries.images.update', $gallery->id, $image->id), 'class' => 'form-style validate clearfix', 'id' => 'image-edit-form', 'method' => 'put') ) }}
	@endif
			{{ Form::hidden('main_image', 0) }}
			{{--<!-- form top row -->
			<div class="col-md-12">--}}
				<!-- form left col -->
				<div class="col-md-6">
					<div class="form-group">
						{{ Form::text('name', Input::old('name'), array('placeholder' => 'Nombre de la imagen', 'class' => 'text-field form-control', 'id' => 'form-input-image-name')) }}
						<div class="alert form-error-image-name"></div>
					</div>  
					
					<div class="form-group">
						<label class="control-label" for="inputStatus">Visibilidad</label>
						<label class="radio">
							{{ Form::radio('status', '1', true, array('id' => 'form-input-image-status')) }} La imagen estará <span class="text-success">visible</span> al publico
						</label>
						<label class="radio">
							{{ Form::radio('status', '0', array( 'id' => 'form-input-image-status' )) }} La imagen estará <span class="text-warning">oculto</span> al publico
						</label>
						<div class="alert form-error-image-status"></div>
					</div>
					<div class="form-group">
						{{ Form::file('file', array('id' => 'form-input-image-file')) }}
						<div class="alert form-error-image-file"></div>
					</div>
				</div><!-- end: form left col -->
				<!-- form right col -->
				<div class="col-md-6">
					<div class="form-group">
						{{ Form::text('tags', Input::old('tags'), array('placeholder' => 'Etiquetas', 'class' => 'text-field form-control', 'id' => 'form-input-image-tags')) }}
						<div class="alert form-error-image-tags"></div>
					</div>
					<div class="form-group">
						{{ Form::textarea('comment', Input::old('comment'), array('placeholder' => 'Comentario de la imagen', 'class' => 'form-control', 'id' => 'form-input-image-comment', 'rows' => 3)) }}
						<div class="alert form-error-image-comment"></div>
					</div>
				</div><!-- end: form right col -->
		    {{--</div><!-- end: form top row -->--}}
		    <!-- form bottom row -->
				<div class="col-md-12">
					<div class="form-group">
						<img src="/assets/images/theme_images/loader-form.GIF" class="image-resource form-loader">
						<button type="submit" class="btn btn-sm btn-outline-inverse" id="image-load_btn">Agregar Imagen a Galería</button>
					</div> 
					<div class="form-group form-general-error-container"></div>           
				</div><!-- end: form bottom row -->
		{{ Form::close() }}
</div><!-- end: IMAGES CREATE/EDIT FORM -->