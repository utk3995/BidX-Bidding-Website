<?php
        session_start();

        $user_name = "root";
		$database = "project";
		$host_name = "localhost"; 

        $email1=$_SESSION['email'];
        $connect_db=new mysqli($host_name, $user_name, "");
		$find_db=mysqli_select_db($connect_db,$database);

        $sql1="select * from user_email where email='$email1'";
		$res2 = mysqli_query($connect_db,$sql1);
		$row1 = mysqli_fetch_array($res2);
		$uid1 = $row1['user_id'];

		$sql2="select * from user_details where user_id='$uid1'";
		$res3 = mysqli_query($connect_db,$sql2);
		$row2 = mysqli_fetch_array($res3);
		$name1 = $row2['name'];
		$itid = 1;
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BidX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>

	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="../themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> <?php echo $name1;?> </strong></div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="homepage.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
    <ul id="topMenu" class="nav pull-right">
    <a href="product_register.php" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Sell Your Product</span></a>
	&nbsp;&nbsp;&nbsp;&nbsp;
<a href="php/logout.php" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>

    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<br>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS </a>
				<ul>
				<li><a class="active" href="products.php?var=camera"><i class="icon-chevron-right"></i>Cameras  </a></li>
				<li><a href="products.php?var=computer"> <i class="icon-chevron-right"></i>Computers, Tablets & laptop </a></li>
				<li><a href="products.php?var=mobile"><i class="icon-chevron-right"></i>Mobile Phone </a></li>
				<li><a href="products.php?var=television"><i class="icon-chevron-right"></i>Television</a></li>
				<li><a href="products.php?var=refrigerator"><i class="icon-chevron-right"></i>Refrigerators</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> HOME AND FURNITURE  </a>
			<ul style="display:none">
				<li><a href="products.php?var=bed"><i class="icon-chevron-right"></i>Bed</a></li>
				<li><a href="products.php?var=sofa"><i class="icon-chevron-right"></i>Sofa</a></li>												
				<li><a href="products.php?var=dining_table"><i class="icon-chevron-right"></i>Dining Tables</a></li>	
				<li><a href="products.php?var=cookware"><i class="icon-chevron-right"></i>CookWares</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>BOOKS</a>
				<ul style="display:none">
				<li><a href="products.php?var=best_seller"><i class="icon-chevron-right"></i>Best Sellers</a></li>
				<li><a href="products.php?var=literature"><i class="icon-chevron-right"></i>Literature And Fiction</a></li>												
				<li><a href="products.php?var=autobiography"><i class="icon-chevron-right"></i>Autobiographies</a></li>	
				<li><a href="products.php?var=others"><i class="icon-chevron-right"></i>Others</a></li>												
			</ul>
			</li>
			<li><a href="products.php">SPORTS AND GAMINGS</a></li>
				<ul style="display:none">
				<li><a href="products.php?var=top"><i class="icon-chevron-right"></i>Top Sports</a></li>
				<li><a href="products.php?var=indoor"><i class="icon-chevron-right"></i>Indoor Sports</a></li>
				<li><a href="products.php?var=gaming"><i class="icon-chevron-right"></i>Gaming Accessories</a></li>
		</ul>
		<br/>
		  
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="themes/images/products/large/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">
				<img src="themes/images/products/large/3.jpg" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                  </div>
                </div>
             
              </div>
			  
			 
			</div>
			<div class="span6">



				<?php
				
				$sql = "select * from items where item_id='$itid'";
				$res = mysqli_query($connect_db,$sql);
				$row = mysqli_fetch_array($res, MYSQLI_ASSOC);



				$highsql = "SELECT * from bid WHERE item_id='$itid' ORDER BY bid_price DESC LIMIT 1";
				$highres = mysqli_query($connect_db,$highsql);
				$highrow = mysqli_fetch_array($highres,MYSQLI_ASSOC);

				if (!$highres) {
				    printf("Error: %s\n", mysqli_error($connect_db));
				    exit();
				}
				
				$largest = $highrow["bid_price"];

				$result1 = mysqli_query( $connect_db,"select * FROM bid where item_id = '$itid'");
				$num_rows1 = mysqli_num_rows($result1);

				$_SESSION["itmid"]=$row["item_id"];
				$_SESSION["buyer"]=$uid1;
				echo'
				<h3>'.$row["name"].'</h3>
				<hr class="soft"/>
				<h4 style="line-height: 2.0;">Base Price:  Rs. '.$row["base_price"].'</h4>
				<h4 style="line-height: 2.0;">Current Highest Bid:  Rs. '.$largest.'</h4>
				<h4 style="line-height: 2.0;">Number of Bids: '.$num_rows1.'</h4>
				<h4 style="line-height: 2.0;">Time Left: 13:14:15</h4>
				<form class="form-horizontal qtyFrm" action="php/addbidcheck.php" method="POST">
				  <div class="control-group">
					<label class="control-label"><span>Your Bid : </span></label>
					<div class="controls">
					<input type="number" step="0.01" class="span2" placeholder="Amount" name="amt"/>

					  <button type="submit" class="btn btn-large btn-primary pull-right"> Submit </button>
					</div>
				  </div>
				</form>

				

				<hr class="soft clr"/>
				<p>'.$row["specification"].'
				
				</p>'
				?>




				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>

</div>
</div> </div>
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