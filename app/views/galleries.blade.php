<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="robots" content="noindex, nofollow">

    <title>TWILLI | Air</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="background-image-overlay"></div>

    <div id="outer-background-container" data-default-background-img="assets/images/other_images/bg5.jpg" style="background-image:url(assets/images/other_images/bg5.jpg);"></div>
    <!-- end: #outer-background-container -->    

    <!-- Outer Container -->
    <div id="outer-container">

      @include("widgets.sidebar")

      <section id="main-content" class="clearfix">
        
        <article id="intro" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg5.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <section class="feature-text">
                  <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                  <p>Etiam at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio, sit amet. </p>
                  <p><a href="#text" class="link-scroll btn btn-outline-inverse btn-lg">find out more</a></p>
                </section>

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="text" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg1.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 class="section-title">Text Content</h1>

                <p class="feature-paragraph"><img data-img-src="assets/images/other_images/transp-image5b.png" class="lazy pull-right" alt="Lorem Ipsum">Etiam at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. <a href="#carousel">Suspendisse molestie lorem odio</a>, sit amet. Laoreet consequat. Duis dictum lorem metus, vitae dapibus.</p>
                <h4>Duis dictum lorem metus</h4>
                <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio. Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo. Pellentesque sed malesuada turpis. Quisque eget lacus sit amet dui.</p>
                <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-1');" class="btn btn-outline-inverse btn-sm">read more</a></p>
                
                <div class="content-to-populate-in-modal" id="modal-content-1">
                  <h1>Lorem Ipsum</h1>
                  <p><img data-img-src="assets/images/other_images/transp-image4.png" class="lazy rounded_border hover_effect pull-right" alt="Lorem Ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in urna vel ante mollis tincidunt. Donec nec magna condimentum tortor laoreet lobortis. Nunc accumsan sapien eu tortor fringilla, et condimentum metus pellentesque. Maecenas rhoncus tortor nec mi congue aliquet. Integer eu turpis scelerisque, iaculis magna non, tempor sem. Quisque consectetur nisi eu felis euismod, sit amet faucibus justo molestie. Ut pretium sapien dui, id facilisis metus interdum pharetra.</p>
                  <p>Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo aliquam vulputate. Ut eget orci in sapien commodo fringilla. Ut luctus faucibus viverra. Quisque ut ante eget libero rutrum imperdiet. Morbi in diam bibendum, venenatis arcu sed, consequat libero. Nulla imperdiet, ipsum et adipiscing pulvinar, nibh metus porta mauris, et vestibulum dolor sapien sit amet justo. In dignissim leo nec erat faucibus volutpat.</p>
                  <h3>Duis dictum lorem metus, vitae dapibus</h3>
                  <p><img data-img-src="assets/images/other_images/transp-image3.png" class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">Sed auctor urna mi, sed fringilla felis vulputate nec. Cras eu nibh id quam pretium convallis. Donec ante enim, placerat nec sagittis sit amet, tempor in velit. Maecenas ultricies commodo lacus id porta. Suspendisse eros elit, lacinia vitae erat vitae, egestas accumsan nunc. Maecenas dictum odio ipsum, non volutpat erat consequat tempor. Pellentesque sed malesuada turpis. Quisque eget lacus sit amet dui feugiat molestie sit amet eget purus. Morbi eget neque nec lectus tempus sagittis nec at ante. </p>
                  <p>Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo aliquam vulputate. Ut eget orci in sapien commodo fringilla. Ut luctus faucibus viverra. Quisque ut ante eget libero rutrum imperdiet. Morbi in diam bibendum, venenatis arcu sed, consequat libero. Nulla imperdiet, ipsum et adipiscing pulvinar, nibh metus porta mauris, et vestibulum dolor sapien sit amet justo. In dignissim leo nec erat faucibus volutpat.</p>
                </div><!-- #modal-content-1 -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        @include("widgets.carousel")

        @include("widgets.grid")

        <article id="featured" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg3.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">Featured</h1>
              
                <!-- feature columns -->
                <section class="feature-columns row clearfix">

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

        <article id="contact" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg4.jpg">
          <div class="content-wrapper clearfix">
            
              <h1 class="section-title">Contact</h1>
              
                <!-- CONTACT DETAILS -->
                <div class="contact-details col-sm-5 col-md-3">
                  <p>123A,<br/>Molestie Lorem Avenue,<br/>Aliquam<br/>AAA0010</p>
                  <p>Tel: (+20) 21 301 524</p>
                  <p><a href="mailto:info@loremipsum.com">info@loremipsum.com</a></p>
                </div>
                <!-- END: CONTACT DETAILS -->

                <!-- CONTACT FORM -->
                <div class="col-sm-7 col-md-9">
                  <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->
                  <form class="form-style validate-form clearfix" action="assets/php/mail.php" method="POST" role="form">

                    <!-- form left col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="text-field form-control validate-field required" data-validation-type="string" id="form-name" placeholder="Full Name" name="name">
                      </div>  
                      <div class="form-group">
                        <input type="email" class="text-field form-control validate-field required" data-validation-type="email" id="form-email" placeholder="Email Address" name="email">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="text-field form-control validate-field phone" data-validation-type="phone" id="form-contact-number" placeholder="Contact Number" name="contact_number">
                      </div>                 
                    </div><!-- end: form left col -->

                    <!-- form right col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea placeholder="Message..." class="form-control validate-field required" name="message"></textarea>
                      </div> 
                      <div class="form-group">
                        <img src="assets/images/theme_images/loader-form.GIF" class="form-loader">
                        <button type="submit" class="btn btn-sm btn-outline-inverse">Submit</button>
                      </div> 
                      <div class="form-group form-general-error-container"></div>           
                    </div><!-- end: form right col -->

                  </form>
                </div><!-- end: CONTACT FORM -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

      </section><!-- #main-content -->

      <!-- Footer -->
      <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

        <ul class="social-icons">
          <li><a href="#" target="_blank" title="Facebook"><img src="assets/images/theme_images/social_icons/facebook.png" alt="Facebook"></a></li>
          <li><a href="#" target="_blank" title="Twitter"><img src="assets/images/theme_images/social_icons/twitter.png" alt="Twitter"></a></li>
          <li><a href="#" target="_blank" title="Google+"><img src="assets/images/theme_images/social_icons/googleplus.png" alt="Google+"></a></li>
        </ul>

        <!-- copyright text -->
        <div class="footer-text-line">&copy; 2014 Twilli | Air</div>
      </section>
      <!-- end: Footer -->      

    </div><!-- #outer-container -->
    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body">
          </div><!-- .modal-body -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->    

    <!-- Javascripts
    ================================================== -->

    <!-- Jquery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <!-- background image fix for IE 9 or less
       - use same background as set above to <body> -->
    <!--[if lt IE 9]>
    <script type="text/javascript">
    $(document).ready(function(){
      jQuery("#outer-background-container").backstretch("assets/images/other_images/bg5.jpg");
    });
    </script> 
    <![endif]-->  

    <!-- detect mobile browsers -->
    <script src="assets/js/detectmobilebrowser.js"></script>

    <!-- Custom functions for this theme -->
    <script src="assets/js/functions.min.js"></script>
    <script src="assets/js/initialise-functions.js"></script>

    <!-- IE9 form fields placeholder fix -->
    <!--[if lt IE 9]>
    <script>contact_form_IE9_placeholder_fix();</script>
    <![endif]-->  

    <!-- GA -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-48808360-1', 'stephenmuscat.com');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');

    </script>    

  </body>
</html>