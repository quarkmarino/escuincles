<section class="feature-columns">
	<article class="feature-col col-md-8 col-md-offset-2">
		<a href="" onclick="populate_and_open_modal(event, 'modal-content-6');" class="thumbnail linked">
			<div class="image-container">
				@if( !empty($gallery->main_image) )
					{{ HTML::image('', $gallery->name, array('class' => 'lazy item-thumbnail', 'title' => $gallery->name, 'data-img-src' => '$gallery->main_image->largethumb')); }}
				@else
					{{ HTML::image('/images/no-image-largethumb.jpg', $gallery->name, array('class' => 'lazy item-thumbnail', 'title' => $gallery->name, 'data-img-src' => '/images/no-image-largethumb.jpg')); }}
				@endif
			</div>
		</a><!-- .thumbnail -->
	</article>
</section>