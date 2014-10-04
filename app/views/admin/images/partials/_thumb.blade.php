<article class="feature-col col-md-4">
	<a href="{{ route('admin.galleries.images.edit', array($image->gallery->id, $image->id), false) }}" title="Modificar imagen"><i class="fa fa-edit"></i></a>
	<a href="{{ route('admin.galleries.images.destroy', array($image->gallery->id, $image->id), false) }}" title="Eliminar imagen de galería"><i class="fa fa-remove"></i></a>
	<a href="" onclick="populate_and_open_modal(event, 'modal-content-{{ $image->id }}');" class="thumbnail linked">
		<div class="image-container">
			{{ HTML::image($image->slide, $image->name, array('class' => 'lazy item-thumbnail', 'title' => $image->name, 'data-img-src' => asset($image->slide))); }}
		</div>
		<div class="caption">
			<h5>{{ $image->name }}</h5>
		</div><!-- .caption -->
	</a><!-- .thumbnail -->
	
	<div class="content-to-populate-in-modal" id="modal-content-{{ $image->id }}">
		{{ HTML::image($image->file, $image->name, array('class' => 'lazy full-width', 'title' => $image->name, 'data-img-src' => asset($image->file))); }}
		<h5>{{ $image->name }}</h5>
		<p>{{ $image->comment }}</p>
	</div><!-- #modal-content-6 -->
</article>