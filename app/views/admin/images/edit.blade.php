@section('content')
	<div class="background-image-overlay"></div>
	<div id="outer-background-container" data-default-background-img="/assets/images/other_images/bg4.jpg" style="background-image:url(/assets/images/other_images/bg4.jpg);"></div>
	<!-- end: #outer-background-container -->    
	<!-- Outer Container -->
	<div id="outer-container">
		@include("admin.images.partials._sidebar")
		<section id="main-content" class="clearfix">
			<article id="gallery" class="section-wrapper">
				<div class="content-wrapper clearfix">
					<h2 class="section-title">Imagen "{{ $image->name }}"</h2>
					@include("admin.images.partials._form")
					@include("admin.images.partials._thumb")
				</div><!-- .content-wrapper -->
			</article><!-- .section-wrapper -->
		</section><!-- #main-content -->
		@include("widgets.footer")
	</div><!-- #outer-container -->
	<!-- end: Outer Container -->
	
	<!-- Modal -->
	<!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
	@include("widgets.common-modal")
@stop
