@extends('layouts.main')
@section("content")
<!---<div class="background-image-overlay"></div>-->

    <div id="outer-background-container" data-default-background-img="assets/images/other_images/bg5.jpg" style="background-image:url(assets/images/other_images/bg5.jpg);"></div>
    <!-- end: #outer-background-container -->    

    <!-- Outer Container -->
    <div id="outer-container">
      @include("admin.galleries.partials._sidebar")

      <section id="main-content" class="clearfix">
        @include("widgets._signin")
      </section><!-- #main-content -->

      @include("widgets.footer")

    </div><!-- #outer-container -->

    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    @include("widgets.common-modal")
@stop