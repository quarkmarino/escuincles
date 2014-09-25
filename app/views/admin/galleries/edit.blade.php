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