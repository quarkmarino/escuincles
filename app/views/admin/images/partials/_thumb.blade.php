<article class="feature-col col-md-4">
	<a href="" onclick="populate_and_open_modal(event, 'modal-content-6');" class="thumbnail linked">
		<div class="image-container">
			{{ HTML::image('', $image->name, array('class' => 'lazy item-thumbnail', 'title' => $image->name, 'data-img-src' => asset($image->slide))); }}
		</div>
		<div class="caption">
			<h5>{{ $image->name }}</h5>
			<p>{{ $image->comment }}</p>
		</div><!-- .caption -->
	</a><!-- .thumbnail -->
	
	<div class="content-to-populate-in-modal" id="modal-content-6">
		{{ HTML::image('', $image->name, array('class' => 'lazy full-width', 'title' => $image->name, 'data-img-src' => asset($image->slide))); }}
		<h1>Sed scelerisque</h1>
		{{--@foreach($image->description as $description_line)
			<p>{{ $description_line }}</p>
		@endforeach--}}
	</div><!-- #modal-content-6 -->
</article>