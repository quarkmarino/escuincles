@section("content")
	<div class="background-image-overlay"></div>
	<div id="outer-background-container" data-default-background-img="/assets/images/other_images/bg5.jpg" style="background-image:url(/assets/images/other_images/bg5.jpg);"></div>
	<!-- end: #outer-background-container -->    
	<!-- Outer Container -->
	<div id="outer-container">
		@include("admin.galleries.partials._sidebar")
		
		<section id="main-content" class="clearfix">
		<article id="galleries" class="section-wrapper clearfix" data-custom-background-img="/assets/images/other_images/bg3.jpg">
			<div class="content-wrapper clearfix">
				<div class="col-sm-11 pull-right">
					<h1 class="section-title">Galerias</h1>
					@include("admin.galleries.partials._form")
					@include("admin.galleries.partials._thumbs")
				</div><!-- .col-sm-10 -->
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