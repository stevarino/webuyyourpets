<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>We Buy Your Pets</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!-- /start menu -->
</head>
<body>
<!--header-->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
<?php
$tab = 'home';
if (strpos($_SERVER['REQUEST_URI'], 'pet.php') !== false) {
  $tab = 'pets';
} else if (strpos($_SERVER['REQUEST_URI'], 'pets.php') !== false) {
  $tab = 'pets';
} else if (strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false) {
  $tab = 'contact';
}
 ?>
<div class="header-top">
	 <div class="header-bottom">
				<div class="logo">
					<h1><a href="/">We Buy Your Pets!</a></h1>
				</div>
			 <!---->
			 <div class="top-nav">
				<ul class="memenu skyblue">
          <li class="<?php echo $tab == 'home' ? 'active' : 'grid'; ?>"><a href="/">Home</a></li>
					<li class="<?php echo $tab == 'pets' ? 'active' : 'grid'; ?>"><a href="pets.php">Pets</a></li>
					<li class="<?php echo $tab == 'contact' ? 'active' : 'grid'; ?>"><a href="contact.php">Contact</a></li>
				</ul>
			 </div>
			 <!----
			 <div class="cart box_1">
				 <a href="checkout.html">
					<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 <!---->
			 </div>
			<div class="clearfix"> </div>
</div>
