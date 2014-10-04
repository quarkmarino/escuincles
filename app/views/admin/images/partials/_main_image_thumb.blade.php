<div class="main-image col-sm-5 col-md-3">
	<section class="feature-columns">
		<article class="feature-col col-md-12">
			<a href="{{ route('admin.galleries.images.destroy', array( $gallery->id, $gallery->main_image->id)) }}" class="thumbnail linked">
				<div class="image-container remove">
					@if( !empty($gallery->main_image) )
						{{ HTML::image($gallery->main_image->largethumb, $gallery->name, array('class' => 'lazy item-thumbnail', 'title' => $gallery->name, 'data-img-src' => asset($gallery->main_image->largethumb))); }}
					@else
						{{ HTML::image('/images/no-image-largethumb.jpg', $gallery->name, array('class' => 'lazy item-thumbnail', 'title' => $gallery->name, 'data-img-src' => '/images/no-image-largethumb.jpg')); }}
					@endif
				</div>
			</a><!-- .thumbnail -->
		</article>
	</section>
</div>