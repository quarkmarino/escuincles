@section("content")
	<div class="background-image-overlay"></div>
	<div id="outer-background-container" data-default-background-img="/assets/images/other_images/bg5.jpg" style="background-image:url(/assets/images/other_images/bg5.jpg);"></div>
	<!-- end: #outer-background-container -->    
    <!-- Outer Container -->
    <div id="outer-container">
		@include("admin.galleries.partials._sidebar")
		<section id="main-content" class="clearfix">
			<article id="gallery" class="section-wrapper">
				<div class="content-wrapper clearfix">
					<h2 class="section-title">Galeria "{{ $gallery->title }}"</h2>
					@include("admin.galleries.partials._form")
					<h3 class="section-title clearfix">Imagenes</h3>
					@include("admin.images.partials._form")
					@include("admin.images.partials._thumbs")
				</div><!-- .content-wrapper -->
			</article><!-- .section-wrapper -->
		</section><!-- #main-content -->
		@include("widgets.footer")
	</div><!-- #outer-container -->
	<!-- end: Outer Container -->
	@include("widgets.common-modal")
@stop


@section('footer')
	@parent
	<!-- jQuery Form -->
    <script src="http://malsup.github.com/jquery.form.js"></script>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var options = {
			beforeSubmit:  showRequest,
			success:		showResponse,
			dataType: 'json' 
		};
		$('body').delegate('#image-load_btn','click', function(e){
			e.preventDefault();
			$('#image-create-form').ajaxForm(options).submit();
		});
	});

	function showRequest(formData, jqForm, options){
		$("img.image-resource.form-loader").css('display', 'inline');
		return true;
	}
	
	function showResponse(response, statusText, xhr, $form){
		if(response.success == false){
			var errors = response.errors;
			$("div.alert").empty().hide();
			$.each(errors, function(index, value){
				//alert(index + ': ' + value);
				if (value.length != 0){
					$("div.alert.form-error-image-" + index).html(value).show();
				}
			});
		}
		else{
			var galleryImageSection = $('#gallery-images');
			galleryImageSection.append(createItem(response));
			$('#form-input-image-name').val('');
			$('#form-input-image-comment').val('');
			$('#form-input-image-tags').val('');
			$('#form-input-image-file').val('');
			//$("#output").css('display','block');
		
			
		}
		$("img.image-resource.form-loader").css('display', 'none');
	}

	function createItem(response){
		var item = 
		'<article class="feature-col col-md-4">' +
			'<a href="/galleries/' + response.gallery.id + '/images/' + response.id + '/edit" title="Modificar imagen"><i class="fa fa-edit"></i></a> ' +
			'<a href="/galleries/' + response.gallery.id + '/images/' + response.id + '/delete" title="Eliminar imagen de galería"><i class="fa fa-remove"></i></a>' +
			'<a href="" onclick="populate_and_open_modal(event, \'modal-content-' + response.id + '\');" class="thumbnail linked">' +
				'<div class="image-container">' +
					'<img src="' + response.slide + '" alt="' + response.name + '" class="img-rounded" data-img-src="' + response.slide + '">' + 
				'</div>' +
				'<div class="caption">' +
					'<h5>' + response.name + '</h5>' +
				'</div>' +
			'</a>' +
			'<div class="content-to-populate-in-modal" id="modal-content-' + response.id + '">' +
				'<img src="' + response.file + '" alt="' + response.name + '" class="full-width" data-img-src="' + response.file + '">' +
				'<h5>' + response.name + '</h5>' +
				'<p>' + response.comment + '</p>' +
			'</div>' +
		'</article>';
		return item;
	}
	
	
	/*function validate_and_submit_forms(t){
		var e=void 0!==t&&t.length>0?t:$("form.validate-form");
		e.each(function(){
			var t=$(this);
			t.find(".validate-field").each(function(){
				$(this).change(function(){
					if($(this).siblings(".alert").fadeOut("fast",function(){$(this).remove()}),""!=$(this).val().trim()){
						var e=validate_fields(t,$(this));
						if(e.length>0&&void 0!==e[0].message&&""!=e[0].message&&"success"!=e[0].message){
							var i='<div class="alert">'+e[0].message+"</div>";
							$(this).after(i),$(this).siblings(".alert").fadeIn("fast")}}})}),
							t.submit(function(e){
								e.preventDefault(),$(this).find(".form-loader").fadeIn("fast");
								var i=$(this).attr("action");
								if(void 0===i&&""==i)
									return!1;
								$(this).find(".alert").fadeOut("fast",function(){$(this).remove()}),$(this).find(".form-general-error-container").fadeOut("fast",function(){$(this).empty()});
								var a=!1;
								return $(this).find(".validate-field").each(function(){var e=validate_fields(t,$(this));
								if(e.length>0&&void 0!==e[0].message&&""!=e[0].message&&"success"!=e[0].message){var i='<div class="alert">'+e[0].message+"</div>";$(this).after(i),$(this).siblings(".alert").fadeIn("fast"),a=!0}}),1==a?($(this).find(".form-loader").fadeOut("fast"),!1):($.ajax({type:"POST",url:i,data:$(this).serialize(),dataType:"html",success:function(e){t.find(".form-loader").fadeOut("fast");var i="Form submitted successfully."==e?!0:!1,a='<div class="alert ';a+=1==i?"success":"error",a+='">'+e+"</div>",t.find(".form-general-error-container").html(a).fadeIn("fast",function(){$(this).delay(1e4).fadeOut("fast",function(){$(this).remove()})}),1==i&&t.find(".form-control").val("")},error:function(){t.find(".form-loader").fadeOut("fast");var e='<div class="alert">An error occured. Please try again later.</div>';t.find(".form-general-error-container").html(e).fadeIn("fast")}}),void 0)})})}*/
	
	
	</script>
@stop