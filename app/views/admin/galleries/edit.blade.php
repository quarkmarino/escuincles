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
					<h2 class="section-title">Galeria "{{ $gallery->name }}"</h2>
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
		$(".alert-box").empty();
		$("span.spinner").css('display', 'inline');
		//$("#output").css('display','none');
		return true;
	}
	
	function showResponse(response, statusText, xhr, $form){
		if(response.success == false){
			var arr = response.errors;
			$('div.text-error').prepend('<h3>' + response.error + '</h3>');
			$("ul.errors").empty();
			$.each(arr, function(index, value){
				if (value.length != 0){
					$("ul.errors").append('<li>' + value +'</li>');
				}
			});
			//$("#validation-errors").show();
		}
		else{
			/*var lastImagesRow = $('section.portfolio').last();
			if(lastImagesRow.children().length >= 2){
				$('#productImages').append('<section class="row-fluid portfolio thumbnails"></section>');
				lastImagesRow = $('section.portfolio').last();
			}*/
			//lastImagesRow.append(createItem(response));
			var galleryImageSection = $('#gallery-images');
			galleryImageSection.append(createItem(response));
			$('#form-input-image-name').val('');
			$('#form-input-image-description').val('');
			$('#form-input-image-tags').val('');
			$('#form-input-image-file').val('');
			//$("#output").css('display','block');
		
			
		}
		$("span.spinner").css('display', 'none');
	}

	function createItem(response){
		var item = 
		'<article class="feature-col col-md-4">' +
			'<a href="/galleries/' + response.gallery.id + '/images/' + response.id + '" class="thumbnail linked">' +
				'<div class="image-container">' +
					'<img src="' + response.file + '" alt="' + response.name + '" class="img-rounded">' + 
				'</div>' +
			'</a>' +
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