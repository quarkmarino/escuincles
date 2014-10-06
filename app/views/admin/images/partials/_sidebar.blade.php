<!-- Left Sidebar -->
<section id="left-sidebar">
  
  <div class="logo">
    <a href="#intro" class="link-scroll"><img src="/escuincles/public/assets/images/other_images/logo.png" alt="Escuincles Traviesos"></a>
  </div><!-- .logo -->
  
  <!-- Menu Icon for smaller viewports -->
  <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>
  
  <ul id="main-menu">
  	<li id="menu-item-info" class="menu-item scroll"><a href="/#info">Información</a></li>
    <li id="menu-item-members" class="menu-item scroll"><a href="/#members">Personal</a></li>
    <li id="menu-item-activities" class="menu-item scroll"><a href="/#activities">Actividades</a></li>
    <li id="menu-item-galleries" class="menu-item scroll"><a href="/#galleries">Galerias</a></li>
    <li id="menu-item-location" class="menu-item scroll"><a href="/#location">Ubicación</a></li>
	<li id="menu-item-back" class="menu-item scroll">{{ HTML::linkRoute('admin.galleries.edit', 'Volver a '.$image->gallery->title, $image->gallery_id) }}</li>
	<li id="menu-item-logout" class="menu-item">{{ HTML::linkRoute('admin.signout', 'Salir') }}</li>
  </ul><!-- #main-menu -->
  
</section><!-- #left-sidebar -->
<!-- end: Left Sidebar -->