<div class="contact-details col-sm-5 col-md-3">
	{{ Form::model($imageInstance, array('route' => array('galleries.images.store', $gallery->id), 'class' => 'form-style validate-form clearfix', 'id' => 'main-image-attach-form', 'files' => true) ) }}
		<div class="col-md-12">
			{{ Form::hidden('name', $gallery->name) }}
			{{ Form::hidden('comment', $gallery->comment) }}
			{{ Form::hidden('status', true) }}
			{{ Form::hidden('main_image', true) }}
			<div class="form-group">
				{{ Form::file('file', array('id' => 'form-input-file')); }}
				@if($errors->first('file'))
					<div class="alert" style="display: block;">{{ $errors->first('file') }}</div>
				@else
					<div class="alert"></div>
				@endif
			</div>
		</div>
		<div class="col-md-10">
			<div class="form-group">
				<img src="/assets/images/theme_images/loader-form.GIF" class="form-loader">
				<button type="submit" class="btn btn-sm btn-outline-inverse">Cargar Imagen Principal</button>
			</div>
			<div class="form-group form-general-error-container"></div>
		</div>
	{{ Form::close() }}
</div>