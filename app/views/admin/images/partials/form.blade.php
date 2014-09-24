<article id="contact" class="section-wrapper clearfix" data-custom-background-img="/assets/images/other_images/bg4.jpg">

{{--<div class="content-wrapper clearfix">--}}
	<!-- GALLERIES CREATE FORM -->
	<div class="col-sm-12 col-md-12">
		@if( isset($gallery) )
			{{ Form::model($gallery, array('route' => array('galleries.update', $gallery->id), 'class' => 'form-style validate-form clearfix', 'id' => 'gallery-edit-form', 'method' => 'put') ) }}
		@else
			{{ Form::open( array('route' => 'galleries.store', 'class' => 'form-style validate-form clearfix', 'id' => 'gallery-create-form', 'role' => 'form') ) }}
		@endif
				{{--<!-- form top row -->
				<div class="col-md-12">--}}
					<!-- form left col -->
					<div class="col-md-6">
						<div class="form-group">
							{{ Form::text('name', Input::old('name'), array('placeholder' => 'Nombre de la imagen', 'class' => 'text-field form-control validate-field required', 'id' => 'form-input-name', 'data-validation-type' => 'string')) }}
						</div>  
						
						<div class="form-group">
							<label class="control-label" for="inputStatus">Visibilidad</label>
							<label class="radio">
								{{ Form::radio('status', '1', true, array('id' => 'form-input-status')) }} Estara <span class="text-success">visible</span> al publico
							</label>
							<label class="radio">
								{{ Form::radio('status', '0', array( 'id' => 'form-input-status' )) }} Estara <span class="text-warning">oculto</span> al publico
							</label>
						</div>
					</div><!-- end: form left col -->
					<!-- form right col -->
					<div class="col-md-6">
						
						<div class="form-group">
							{{ Form::text('tags', Input::old('tags'), array('placeholder' => 'Etiquetas', 'class' => 'text-field form-control validate-field', 'id' => 'form-input-name', 'data-validation-type' => 'string')) }}
						</div>
						<div class="form-group">
							{{ Form::textarea('description', Input::old('description'), array('placeholder' => 'Descripción de la imagen', 'class' => 'form-control validate-field required', 'id' => 'form-input-description', 'rows' => 3)) }}				
						</div> 
					</div><!-- end: form right col -->
			    {{--</div><!-- end: form top row -->--}}
			    <!-- form bottom row -->
					<div class="col-md-12">
						<div class="form-group">
							<img src="/assets/images/theme_images/loader-form.GIF" class="form-loader">
							<button type="submit" class="btn btn-sm btn-outline-inverse">Crear Imagen</button>
						</div> 
						<div class="form-group form-general-error-container"></div>           
					</div><!-- end: form bottom row -->
			{{ Form::close() }}
	</div><!-- end: GALLERIES CREATE FORM -->
{{--</div>--}}
</article>