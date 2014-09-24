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
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    @yield('content')
	
	<!-- Javascripts
    ================================================== -->

    <!-- Jquery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="/assets/js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="/assets/js/jquery.backstretch.min.js"></script>
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
    <script src="/assets/js/detectmobilebrowser.js"></script>

    <!-- Custom functions for this theme -->
    <script src="/assets/js/functions.min.js"></script>
    <script src="/assets/js/initialise-functions.js"></script>

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