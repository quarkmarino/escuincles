<!-- GALLERY CREATE/EDIT FORM -->
@if( !isset($gallery) )
	<div class="col-sm-12 col-md-12">
	{{ Form::open( array('route' => 'galleries.store', 'class' => 'form-style clearfix', 'id' => 'gallery-create-form', 'role' => 'form') ) }}
@else
	@if( $gallery->main_image === null )
		@include("admin.images.partials._main_image_form")
	@else
		@include("admin.images.partials._main_image_thumb")
	@endif
	<div class="col-sm-7 col-md-9">
	{{ Form::model($gallery, array('route' => array('galleries.update', $gallery->id), 'class' => 'form-style clearfix', 'id' => 'gallery-edit-form', 'method' => 'put') ) }}
@endif
		<!-- form left col -->
		<div class="col-md-6">
			<div class="form-group">
				{{ Form::text('name', Input::old('name'), array('placeholder' => 'Nombre de la galería', 'class' => 'text-field form-control', 'id' => 'form-input-name', 'data-validation-type' => 'string')) }}
				@if($errors->first('name'))
					<div class="alert" style="display: block;">{{ $errors->first('name') }}</div>
				@else
					<div class="alert"></div>
				@endif
			</div>
			<div class="form-group">
				{{ Form::text('title', Input::old('title'), array('placeholder' => 'Titulo', 'class' => 'text-field form-control', 'id' => 'form-input-title', 'data-validation-type' => 'string')) }}
				@if($errors->first('title'))
					<div class="alert" style="display: block;">{{ $errors->first('title') }}</div>
				@else
					<div class="alert"></div>
				@endif
			</div>
			<div class="form-group">
				<label class="control-label" for="form-input-status">Visibilidad</label>
				<label class="radio">
					{{ Form::radio('status', '1', true, array('id' => 'form-input-status')) }} La galería estará <span class="text-success">visible</span> al publico
				</label>
				<label class="radio">
					{{ Form::radio('status', '0', array( 'id' => 'form-input-status' )) }} La galería estará <span class="text-warning">oculto</span> al publico
				</label>
				@if($errors->first('status'))
					<div class="alert" style="display: block;">{{ $errors->first('status') }}</div>
				@else
					<div class="alert"></div>
				@endif
			</div>
		</div><!-- end: form left col -->
		<!-- form right col -->
		<div class="col-md-6">
			<div class="form-group">
				{{ Form::text('comment', Input::old('comment'), array('placeholder' => 'Comentario', 'class' => 'text-field form-control', 'id' => 'form-input-comment', 'data-validation-type' => 'string')) }}
				@if($errors->first('comment'))
					<div class="alert" style="display: block;">{{ $errors->first('comment') }}</div>
				@else
					<div class="alert"></div>
				@endif
			</div>
			<div class="form-group">
				{{ Form::text('tags', Input::old('tags'), array('placeholder' => 'Etiquetas', 'class' => 'text-field form-control', 'id' => 'form-input-name', 'data-validation-type' => 'string')) }}
				@if($errors->first('tags'))
					<div class="alert" style="display: block;">{{ $errors->first('tags') }}</div>
				@else
					<div class="alert"></div>
				@endif
			</div>
			<div class="form-group">
				{{ Form::textarea('description', Input::old('description'), array('placeholder' => 'Descripción de la galería', 'class' => 'form-control', 'id' => 'form-input-description', 'rows' => 3)) }}
				@if($errors->first('description'))
					<div class="alert" style="display: block;">{{ $errors->first('description') }}</div>
				@else
					<div class="alert"></div>
				@endif
			</div> 
		</div><!-- end: form right col -->
		<!-- form bottom row -->
		<div class="col-md-3 pull-right">
			<div class="form-group">
				<img src="/assets/images/theme_images/loader-form.GIF" class="form-loader">
				<button type="submit" class="btn btn-sm btn-outline-inverse">@if( !isset($gallery) ) Crear @else Guardar @endif Galería </button>
			</div> 
			<div class="form-group form-general-error-container"></div>           
		</div><!-- end: form bottom row -->
	{{ Form::close() }}
	</div><!-- end: GALLERY CREATE/EDIT FORM -->