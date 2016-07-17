<?php
        session_start();
        $email1=$_SESSION['email'];
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db( $connection,"project");
        $query = mysqli_query( $connection,"select * from user_details,user_email where user_details.user_id=user_email.user_id");
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

		$name1 = $row['name'];
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
	<div style="float:right"><h4 ><a href="php/logout.php" style="font-family:timeburnernormal;color:#FFFFFF;font-size:30px;"><b> Logout &nbsp;&nbsp;&nbsp;</b></a></h4></div>
<div style="float:right"><h4 ><a href="product_register.php" style="font-family:timeburnernormal;color:#FFFFFF;font-size:30px;"><b> Sell       &nbsp;&nbsp;&nbsp;</b></a></h4></div>

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
<!-- Header End====================================================================== -->

<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<br>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a style="font-family:timeburnernormal;font-size:18px;"> ELECTRONICS </a>
				<ul>
				<li><a class="active" href="products.php?var=camera" style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Cameras  </a></li>
				<li><a href="products.php?var=computer"style="font-family:timeburnernormal;font-size:15px;"> <i class="icon-chevron-right"></i>Computers, Tablets & laptop </a></li>
				<li><a href="products.php?var=mobile"style="font-family:timeburnernormal;font-size:15px;"><i class="icon-chevron-right"></i>Mobile Phone </a></li>
				<li><a href="products.php?var=television"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Television</a></li>
				<li><a href="products.php?var=refrigerator"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Refrigerators</a></li>
				</ul>
			</li>
			<li class="subMenu"><a style="font-family:timeburnernormal;font-size:18px;"> HOME AND FURNITURE  </a>
			<ul style="display:none">
				<li><a href="products.php?var=bed"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Bed</a></li>
				<li><a href="products.php?var=sofa"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Sofa</a></li>												
				<li><a href="products.php?var=dining_table"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Dining Tables</a></li>	
				<li><a href="products.php?var=cookware"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>CookWares</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a style="font-family:timeburnernormal;font-size:18px;">BOOKS</a>
				<ul style="display:none">
				<li><a href="products.php?var=best_seller"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Best Sellers</a></li>
				<li><a href="products.php?var=literature"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Literature And Fiction</a></li>												
				<li><a href="products.php?var=autobiography"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Autobiographies</a></li>	
				<li><a href="products.php?var=others"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Others</a></li>												
			</ul>
			</li>
			<li><a class="subMenu" style="font-family:timeburnernormal;font-size:18px;">SPORTS AND GAMINGS</a></li>
				<ul style="display:none">
				<li><a href="products.php?var=top"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Top Sports</a></li>
				<li><a href="products.php?var=indoor"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Indoor Sports</a></li>
				<li><a href="products.php?var=gaming"style="font-family:timeburnernormal ;font-size:15px;"><i class="icon-chevron-right"></i>Gaming Accessories</a></li>
		</ul>
		<br/>
		  
			
	</div>
<!-- Sidebar end=============================================== -->
</br>
<div class="span9">
    	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<form class="form-horizontal" action="product_register1.php" method="POST" enctype="multipart/form-data">
		<h4>Item Details</h4>
	</br>
		
		<div class="control-group">
			<label class="control-label" for="inputFname1">Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="Name" name="item_name">
			</div>
		 </div>
		 
		<div class="control-group">
		<label class="control-label">Type<sup>*</sup></label>
		<div class="controls">
		  <select class="span2" name="item_type">
				<option value="" >-</option>
					<option value="camera">Cameras</option>
					<option value="computer">Computers, Tablets & laptop</option>
					<option value="mobile">Mobile Phone</option>
					<option value="television">Television</option>
					<option value="refrigerator">Refrigerators</option>
					<option value="bed">Bed</option>
					<option value="sofa">Sofa</option>
					<option value="dining_table">Dining Tables</option>
					<option value="cookware">CookWares</option>
					<option value="best_seller">Best Sellers</option>
					<option value="literature">Literature And Fiction</option>
					<option value="autobiography">Autobiographies</option>
					<option value="others">Others</option>
					<option value="top">Top Sports</option>
					<option value="indoor">Indoor Sports</option>
					<option value="gaming">Gaming Accessories</option>
			</select>
		</div>
	  </div>

	  <div class="control-group">
			<label class="control-label" for="address">Company<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" placeholder=""  name="company"/> 
			</div>
		</div>

	  <div class="control-group">
		<label class="control-label">Age of your product <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="dob" name="age" placeholder="(In Months)" class="form-control input-lg" required="true">
		</div>
	  </div>



	<div class="control-group">
		<label class="control-label" for="address">Duration Of Bid <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="address" placeholder="In Days"  name="item_bid_time">
		</div>
	  </div>	  

		


				
		<div class="control-group">
			<label class="control-label" for="address">Base Price<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" placeholder=""  name="item_base_price"/> 
			</div>
		</div>
		
		
		
		

		
		<div class="control-group">
			<label class="control-label" for="city">Item Photograph<sup>*</sup></label>
			<div class="controls">
			  <input type="file" name="fileToUpload" id="fileToUpload">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="city">Specifications<sup>*</sup></label>
			<div class="controls">
			  <textarea rows="4" cols="50" name="other_infor">Tell us about your product </textarea>
			</div>
		</div>


		




		
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<button name="go">Submit</button>
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	
</body>
</html>