<!-- feature columns -->
<section class="feature-columns row clearfix">
	@foreach($galleries as $gallery)
		<article class="feature-col col-md-4">
			<a href="" onclick="populate_and_open_modal(event, 'modal-content-6');" class="thumbnail linked">
				<div class="image-container">
					<img data-img-src="/assets/images/other_images/project-3.jpg" class="lazy item-thumbnail" alt="Lorem Ipsum">
				</div>
				<div class="caption">
					<h5>{{ $gallery->title }}</h5>
					<p>{{ $gallery->comment }}</p>
				</div><!-- .caption -->
			</a><!-- .thumbnail -->
			
			<div class="content-to-populate-in-modal" id="modal-content-6">
				<img data-img-src="/assets/images/other_images/top-image1.jpg" class="lazy full-width" alt="{{ $gallery->title }}">
				<h1>Sed scelerisque</h1>
				{{ $gallery->description }}
				{{--@foreach($gallery->description as $description_line)
					<p>{{ $description_line }}</p>
				@endforeach--}}
			</div><!-- #modal-content-6 -->
		</article>
	@endforeach
</section><!-- end: .feature-columns -->
<!-- End: Section content to edit -->