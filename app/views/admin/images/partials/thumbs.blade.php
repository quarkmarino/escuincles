<article id="galleries" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg3.jpg">
	<div class="content-wrapper clearfix">
		<div class="col-sm-11 pull-right">
			<h1 class="section-title">Galerias</h1>
			
			<!-- feature columns -->
			<section class="feature-columns row clearfix">
				@include("admin.galleries.partials.form")
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
							@foreach($gallery->description as $description_line)
								<p>{{ $description_line }}</p>
							@endforeach
						</div><!-- #modal-content-6 -->
					</article>
				@endforeach
				
				  <article class="feature-col col-md-4">
		            <a href="" onclick="populate_and_open_modal(event, 'modal-content-6');" class="thumbnail linked">
		              <div class="image-container">
		                <img data-img-src="assets/images/other_images/project-3.jpg" class="lazy item-thumbnail" alt="Lorem Ipsum">
		              </div>
		              <div class="caption">
		                <h5>Elit imperdiet</h5>
		                <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue.</p>
		              </div><!-- .caption -->
		            </a><!-- .thumbnail -->
		
		            <div class="content-to-populate-in-modal" id="modal-content-6">
		              <img data-img-src="assets/images/other_images/top-image1.jpg" class="lazy full-width" alt="Lorem Ipsum">
		              <h1>Sed scelerisque</h1>
		              <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio</a>, sit amet. </p>
		              <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio, sit amet.</p>
		              <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
		            </div><!-- #modal-content-6 -->
		          </article>
		
		          <article class="feature-col col-md-4">
		            <a href="" onclick="populate_and_open_modal(event, 'modal-content-7');" class="thumbnail linked">
		              <div class="image-container">
		                <img data-img-src="assets/images/other_images/project-2.jpg" class="lazy item-thumbnail" alt="Lorem Ipsum">
		              </div>
		              <div class="caption">
		                <h5>Nullam ac rhoncus</h5>
		                <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Integer ultricies.</p>
		              </div><!-- .caption -->
		            </a><!-- .thumbnail -->
		
		            <div class="content-to-populate-in-modal" id="modal-content-7">
		              <img data-img-src="assets/images/other_images/top-image2.jpg" class="lazy full-width" alt="Lorem Ipsum">
		              <h1>Sed scelerisque</h1>
		              <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio</a>, sit amet. </p>
		              <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio, sit amet.</p>
		              <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
		            </div><!-- #modal-content-7 -->
		          </article>
		
		          <article class="feature-col col-md-4">
		            <a href="" onclick="populate_and_open_modal(event, 'modal-content-8');" class="thumbnail linked">
		              <div class="image-container">
		                <img data-img-src="assets/images/other_images/project-4.jpg" class="lazy item-thumbnail" alt="Lorem Ipsum">
		              </div>
		              <div class="caption">
		                <h5>Aliquam adipiscing</h5>
		                <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet.</p>
		              </div><!-- .caption -->
		            </a><!-- .thumbnail -->
		
		            <div class="content-to-populate-in-modal" id="modal-content-8">
		              <img data-img-src="assets/images/other_images/top-image3.jpg" class="lazy full-width" alt="Lorem Ipsum">
		              <h1>Sed scelerisque</h1>
		              <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio</a>, sit amet. </p>
		              <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio, sit amet.</p>
		              <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
		            </div><!-- #modal-content-8 -->
		
		          </article>
			</section><!-- end: .feature-columns -->
		<!-- End: Section content to edit -->
		</div><!-- .col-sm-10 -->
	</div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->