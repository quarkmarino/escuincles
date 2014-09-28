	<!-- feature columns -->
	<section class="feature-columns row clearfix" id="gallery-images">
		@foreach($gallery->images as $image)
			@include('admin.images.partials._thumb')
		@endforeach
	</section><!-- end: .feature-columns -->
<!-- End: Section content to edit -->