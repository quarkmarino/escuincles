<!-- feature columns -->
<section class="feature-columns row clearfix">
	@foreach($galleries as $gallery)
		<article class="feature-col col-md-4">
			<a href="{{ route('admin.galleries.edit', $gallery->id, false) }}" title="Modificar galería"><i class="fa fa-edit"></i></a>
			<a href="{{ route('admin.galleries.destroy', $gallery->id, false) }}" title="Eliminar galería"><i class="fa fa-remove"></i></a>
			<a href="" onclick="populate_and_open_modal(event, 'modal-content-{{ $gallery->id }}');" class="thumbnail linked">
				<div class="image-container">
					<img data-img-src="/images/no-image-slide.jpg" class="lazy item-thumbnail" alt="Lorem Ipsum">
				</div>
				<div class="caption">
					<h5>{{ $gallery->title }}</h5>
					<p>{{ $gallery->comment }}</p>
				</div><!-- .caption -->
			</a><!-- .thumbnail -->
			
			<div class="content-to-populate-in-modal" id="modal-content-{{ $gallery->id }}">
				@if(!empty($gallery->main_image))
					{{ HTML::image('', $gallery->title, array('class' => 'lazy full-width', 'title' => $gallery->title, 'data-img-src' => asset($gallery->main_image->slide))); }}
				@else
					<img data-img-src="/images/no-image.jpg" class="lazy full-width" alt="{{ $gallery->title }}">
				@endif
				<h1>{{ $gallery->title }}</h1>
				{{ $gallery->description }}
				{{--@foreach($gallery->description as $description_line)
					<p>{{ $description_line }}</p>
				@endforeach--}}
			</div><!-- #modal-content-6 -->
		</article>
	@endforeach
</section><!-- end: .feature-columns -->
<!-- End: Section content to edit -->