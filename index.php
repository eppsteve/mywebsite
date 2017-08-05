<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Steve Alogaris - Software Engineer</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="include/widgets.css" media="screen">
	<!--<link href="index_files/prettyPhoto.css" rel="stylesheet" type="text/css">-->
	<link rel="stylesheet" type="text/css" href="include/jcarousel.css">
	<link rel="stylesheet" type="text/css" href="include/normalize.css" media="screen">
	<link rel="stylesheet" type="text/css" href="include/grid.css" media="screen">
	<link rel="stylesheet" type="text/css" href="include/css.css">

	<link rel="icon" type="image/ico" href="images/favicon.ico" />
	
	<script type="text/javascript" src="include/jquery-1.8.2.min.js"></script> 
	<script type="text/javascript" src="include/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="include/stellar.js"></script>
	<script type="text/javascript" src="include/prettyPhoto.js"></script>
	<script type="text/javascript" src="include/stickyjs.js"></script>
	<!-- <script type="text/javascript" src="include/isotope.pkgd.min.js" ></script> -->
	<!-- <script type="text/javascript" src="include/sorting.js"></script> -->
	<script type="text/javascript" src="include/jquery.js"></script>
	<script type="text/javascript" src="include/js.js"></script>
	<script type="text/javascript" src="include/waypoints.js"></script>
	<!-- <script type="text/javascript" src="include/jquery.form.min.js"></script> -->
	
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> <!-- google maps -->

	<script>
		// $(document).ready(function(){			
		// 	 $("#contact-toggle").on('click', function(){
		// 		$("#contact-form").slideToggle("slow");
		// 	 });
			 
		// 	 $("#btnSend").on('click', function(){
		// 		 console.log('click');
		// 		 $("#contact-name").val("");
		// 		 $("#contact-email").val("");
		// 		 $("#contact-message").val("");
		// 		 $(".ajax-loader").css("visibility", "");
		// 	 });
			 
		// 	// bind form using ajaxForm plugin
		// 	$('#ajax-form').ajaxForm({ 
		// 		target:	'#contact-response',    
		// 		success:   function(){
		// 			$('#contact-response').html("Thank you for your message, I'll be in touch!");
		// 			$(".ajax-loader").css("visibility", "hidden");
		// 		}
		// 	}); 			
		// });
		
		// initialize google maps
		function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(39.3654719, 22.9489501),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>

<body>

<!-- Google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49901887-1', 'co.nr');
  ga('send', 'pageview');

</script>
<!-- Google analytics -->

<?php
	include_once("cover.php");
	include_once("about.php");
	include_once("skills.php");
	include_once("projects.php");
	include_once("contact.php");	
?>

<div id="footer">
	<div class="container clearfix">
		<div class="copyright">Steve © 2017 </div>
		<div id="back_top"><a class="button" title="" data-slide="1"></a></div>
	</div>
</div>

</body>
</html>