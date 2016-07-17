<?php
session_start();
$database="project"; //database name
    
$user_name = "root";
$password = "";
$database = "project";
$host_name = "localhost"; 

$connect_db=new mysqli($host_name, $user_name, $password);

$find_db=mysqli_select_db($connect_db,$database);
if ($find_db) {

}
else {
die ("Database does not exist");
}
$itmid1=$_SESSION["itmid"];    
$buyer1=$_SESSION["buyer"];
$amt1 = $_SESSION["amount"];
$query = "INSERT INTO bid (item_id,buyer_id,bid_price) VALUES ('$itmid1','$buyer1','$amt1')";
mysqli_query($connect_db,$query);


?>
<?php
$email1=$_SESSION["email"];
$query = mysqli_query( $connect_db,"select * from user_email join user_details on user_details.user_id=user_email.user_id where user_email.email='$email1'");
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$name1 = $row['email'];
		$nm = $row['name'];
mysqli_close($connect_db);
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
<body style="background-color:#23403F">
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
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<br>
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
	

<div id="mainBody">
	<div class="container">    
	   

	<div class="span4">       
	<div class="container">    
	  <div class="row"> 
	  	<center>
	  <div class="span8">
			
	  	<div class="col-md-6">
    		<div id="legend">
              <legend class="" style="font-family:Comic sans ms" >Your Bid has been placed successfully. In case you win this bid, you will be notified on your email address</legend>
            </div></br></br>
         <div style=""><h4 ><a href="homepage.php" style="font-family:CookieMonster;color:#4253FF;font-size:70px;"><b> Homepage &nbsp;&nbsp;&nbsp;</b></a></h4></div>
      </center>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



<!-- MainBody End ============================= -->
</br></br></br></br></br></br>
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
	<script src="../themes/js/jquery.js" type="text/javascript"></script>
	<script src="./themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="../themes/js/bootshop.js"></script>
    <script src="../themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->

</div>

<span id="themesBtn"></span>
</body>
</html>