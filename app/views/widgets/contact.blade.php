<article id="contact" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg4.jpg">
	<div class="content-wrapper clearfix">
		<h1 class="section-title">Contacto</h1>
		
		<!-- CONTACT DETAILS -->
		<div class="contact-details col-sm-5 col-md-3">
			<p>Calle Miguel López de Lima<br/>Manzana 4 lote 11<br/>Fracc. Montoya,<br/>Oaxaca de Juárez, Oax. C.P.68140</p>
			<!--<p>Tel: (+20) 21 301 524</p>-->
			<p><a href="escuinclestraviesos@hotmail.com">escuinclestraviesos@hotmail.com</a></p>
		</div>
		<!-- END: CONTACT DETAILS -->
			
		<!-- CONTACT FORM -->
		<div class="col-sm-7 col-md-9">
			<!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->
			<form class="form-style validate-form clearfix" action="assets/php/mail.php" method="POST" role="form">
				<!-- form left col -->
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="text-field form-control validate-field required" data-validation-type="string" id="form-name" placeholder="Nombre completo" name="name">
					</div>  
					<div class="form-group">
						<input type="email" class="text-field form-control validate-field required" data-validation-type="email" id="form-email" placeholder="Correo electrónico" name="email">
					</div>
					<div class="form-group">
						<input type="tel" class="text-field form-control validate-field phone" data-validation-type="phone" id="form-contact-number" placeholder="Telefono de contacto" name="contact_number">
					</div>                 
				</div><!-- end: form left col -->
				
				<!-- form right col -->
				<div class="col-md-6">
					<div class="form-group">
						<textarea placeholder="Mensaje..." class="form-control validate-field required" style="height: 132px;" name="message"></textarea>
					</div> 
					<div class="form-group">
						<img src="assets/images/theme_images/loader-form.GIF" class="form-loader">
						<button type="submit" class="btn btn-sm btn-outline-inverse">Submit</button>
					</div> 
					<div class="form-group form-general-error-container"></div>           
				</div><!-- end: form right col -->
			</form>
		</div><!-- end: CONTACT FORM -->
	</div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->
