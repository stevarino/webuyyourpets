<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>We Buy Your Pets | Home</title>
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

<div class="header-top">
	 <div class="header-bottom">
				<div class="logo">
					<h1><a href="/">We Buy Your Pets!</a></h1>
				</div>
			 <!---->
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="grid"><a href="/">Home</a></li>
					<li class="active"><a href="#">Pets</a></li>
					<li class="grid"><a href="contact.html">Contact</a></li>
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
<!----
<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				 <div class="banner1">
					  <div class="banner-info">
					  <h3>Pet Selling as it Should Be.</h3>
					  <p>Need to get rid of an animal that has honestly outlived its usefulness? Let us take care of it for you!</p>
					  </div>
				 </div>
	         </li>
	         <li>
				 <div class="banner2">
					 <div class="banner-info">
					 <h3>We come to you!</h3>
					 <p>There is no exucse not to pick up the phone today.</p>
					 </div>
				 </div>
			 </li>
	         <li>
	             <div class="banner3">
	        	 <div class="banner-info">
	        	 <h3>Just looking for a change of scenery?</h3>
	          	 <p>Ask about our low-cost exchange program. Satisfaction guaranteed!</p>
				 </div>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
<script src="js/bootstrap.js"> </script>

<div class="offers">
	 <div class="container">
         <?php

$db = new SQLite3('db.sqlite');
$id = $_GET['id'];
$results = $db->query("SELECT id,title,image,description FROM pets where id = $id limit 1");
$i = 0;
while ($row = $results->fetchArray()) { ?>
	<h3><?php echo $row[1]; ?></h3>
    <p style='text-align: center; margin: 2em 0;'>
        <img src="images/<?php echo $row[2]; ?>" alt=""/>
	</p>
    <p><?php echo $row[3]; ?></p>
<?php
}
?>
		 <div class="clearfix"></div>
	 </div>
	 </div>
</div>
<!---->
<div class="subscribe">
	 <div class="container">
		 <h3>Newsletter</h3>
		 <form>
			 <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			 <input type="submit" value="Subscribe">
		 </form>
	 </div>
</div>
<!---->
<?php require 'footer.php'; ?>
