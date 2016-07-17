<?php
	session_start();
	$name1=$_POST['name'];
	$_SESSION['name']=$name1;
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BidX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  <style>
   @font-face { font-family: CookieMonster; src: url('font/CookieMonster.TTF'); } 
  @font-face { font-family: Something Strange; src: url('font/Something Strange.TTF'); } 
  @font-face { font-family: quango ; src: url('font/Quango.otf'); } 
  @font-face { font-family: timeburnernormal; src: url('font/timeburnernormal.otf'); }  
  
  
  </style>
  </head>
  
<body  style="background-color:#23403F">
<div >
<div class="container">
</br>
<div  id="welcomeLine" class="row">
</br></br>
<div style="color:white;font-family:quango;font-size:100px;">BidX</div></br>
	

</div>


<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>



</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">

	<div class="row">
	<div class="span9">
    <br>
	<h3 style="color:white;font-family:timeburnernormal;font-size:30px;"> Registration</h3>	<br>
	<div class="well">

	<form class="form-horizontal" action="php/register.php" method="POST">
		<h4>Your personal information</h4>
	</br>
		
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="email" id="input_email" placeholder="Email" name="email">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" placeholder="Password"  name="password">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <input type="date" id="dob" name="dob" placeholder="" class="form-control input-lg" required="true">
		</div>
	  </div>


		<h4>Your address</h4>
		
		<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" placeholder="Adress"  name="address"/> <span>Street address, P.O. box, company name, c/o</span>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="city" placeholder="city"  name="city"/> 
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
			  <input type="number" id="postcode" placeholder="Zip / Postal Code"  name="pincode"/> 
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="phone">Contact No. <sup>*</sup></label>
			<div class="controls">
			  <input type="number"  name="phone" id="phone" placeholder="phone"  name="phone"/> <span></span>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="city">Card No.<sup>*</sup></label>
			<div class="controls">
			  <input type="number" id="card_no"  name="cardno"/> 
			</div>
		</div>
		
		<div class="control-group">
		<label class="control-label">Card Type<sup>*</sup></label>
		<div class="controls">
		  <select class="span2" name="cardtype">
				<option value="" >-</option>
					<option value="1">Credit Card</option>
					<option value="2">Debit Card</option>
					<option value="3">VISA</option>
					<option value="4">Rupay</option>
					<option value="5">Maestro</option>
					<option value="6">American Express</option>
					<option value="7">PayPal</option>
			</select>
		</div>
	  </div>
		
		<div class="control-group">
			<label class="control-label" for="city">Name On Card<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="Card_name" placeholder="Name" name="cardname"/> 
			</div>
		</div>



		
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<button name="go">Register</button>
			</div>
		</div>		
	</form>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<div  id="footerSection">
	<div class="container">
		<div class="clearfix">
  			<h5><span style="float: left;">Copyrights &copy;. All rights Resevered</span></h5>
  			<font size="3"> <span style="float: right;"><a href="faq.html" >FAQ</a> &nbsp;&nbsp;&nbsp; <a href="tac.html"> Terms of Use </a> &nbsp;&nbsp;&nbsp; <a href="contact.html">Contact Us</a></span></font>
 		</div>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
</body>
</html>