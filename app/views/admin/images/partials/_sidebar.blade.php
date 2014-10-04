<!-- Left Sidebar -->
<section id="left-sidebar">
  
  <div class="logo">
    <a href="#intro" class="link-scroll"><img src="/assets/images/other_images/logo.png" alt="Escuincles Traviesos"></a>
  </div><!-- .logo -->
  
  <!-- Menu Icon for smaller viewports -->
  <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>
  
  <ul id="main-menu">
	<li id="menu-item-text" class="menu-item scroll">{{ HTML::linkRoute('galleries.edit', $image->gallery->title, $image->gallery_id) }}</li>
  </ul><!-- #main-menu -->
  
</section><!-- #left-sidebar -->
<!-- end: Left Sidebar -->