<article class="feature-col col-md-4">
	<a href="" onclick="populate_and_open_modal(event, 'modal-content-{{ $image->id }}');" class="thumbnail linked">
		<div class="image-container">
			{{ HTML::image('', $image->name, array('class' => 'lazy item-thumbnail', 'title' => $image->name, 'data-img-src' => asset($image->slide))); }}
		</div>
		<div class="caption">
			<h5>{{ $image->name }}</h5>
		</div><!-- .caption -->
	</a><!-- .thumbnail -->
	
	<div class="content-to-populate-in-modal" id="modal-content-{{ $image->id }}">
		{{ HTML::image('', $image->name, array('class' => 'lazy full-width', 'title' => $image->name, 'data-img-src' => asset($image->file))); }}
		<h5>{{ $image->name }}</h5>
		<p>{{ $image->comment }}</p>
	</div><!-- #modal-content-6 -->
</article>