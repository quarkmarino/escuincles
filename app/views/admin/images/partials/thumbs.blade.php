<article id="images" class="section-wrapper clearfix" data-custom-background-img="/assets/images/other_images/bg3.jpg">
	<div class="content-wrapper clearfix">
		<div class="col-sm-11 pull-right">
			<h2 class="section-title">Imagenes de Galeria {{ $gallery->name }}</h2>
			
			<!-- feature columns -->
			<section class="feature-columns row clearfix">
				@include("admin.images.partials.form")
				@foreach($gallery->images as $image)
					<article class="feature-col col-md-4">
						<a href="" onclick="populate_and_open_modal(event, 'modal-content-6');" class="thumbnail linked">
							<div class="image-container">
								{{ HTML::image('', $image->name, array('class' => 'lazy item-thumbnail', 'title' => $image->name, 'data-img-src' => '$image->largethumb')); }}
							</div>
							<div class="caption">
								<h5>{{ $image->name }}</h5>
								<p>{{ $image->comment }}</p>
							</div><!-- .caption -->
						</a><!-- .thumbnail -->
						
						<div class="content-to-populate-in-modal" id="modal-content-6">
							{{ HTML::image('', $image->name, array('class' => 'lazy full-width', 'title' => $image->name, 'data-img-src' => '$image->slide')); }}
							<h1>Sed scelerisque</h1>
							@foreach($image->description as $description_line)
								<p>{{ $description_line }}</p>
							@endforeach
						</div><!-- #modal-content-6 -->
					</article>
				@endforeach
			</section><!-- end: .feature-columns -->
		<!-- End: Section content to edit -->
		</div><!-- .col-sm-10 -->
	</div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->