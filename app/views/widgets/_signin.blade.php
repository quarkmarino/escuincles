<article id="signin" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg4.jpg">
	<div class="content-wrapper clearfix">
		<h1 class="section-title">Acceso</h1>
			
		<!-- CONTACT FORM -->
		<div class="col-sm-12 col-md-12">
			<!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->
			{{ Form::open( array('url' => 'signin', 'class' => 'form-style clearfix', 'id' => 'sigin-form', 'role' => 'form') ) }}
				@if(Session::has('error'))
					<div class="alert-box text-error">
						<h3>{{ Session::get('error') }}</h3>
					</div>
				@endif
				<!-- form left col -->
				<div class="col-md-6 col-md-offset-6">
					<div class="form-group">
						{{ Form::text('username', Input::old('username'), array('placeholder' => 'Nombre de usuario', 'class' => 'text-field form-control', 'id' => 'form-input-username')) }}
					</div>  
					<div class="form-group">
						{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'text-field form-control', 'id' => 'form-input-password')) }}
					</div>
					<div class="form-group">
						<img src="assets/images/theme_images/loader-form.GIF" class="form-loader">
						{{ Form::submit('Acceder', array('class' => 'btn btn-sm btn-outline-inverse')) }}
					</div>                 
				</div><!-- end: form left col -->
			{{ Form::close() }}
		</div><!-- end: CONTACT FORM -->
	</div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->
