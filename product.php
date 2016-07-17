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
		$itid = $_GET['var'];;
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
	
	echo"
	<div class='span9'>
	<div class='row'>	  
			<div id='gallery' class='span3'></br></br></br>
            <a href='themes/images/products/'>
				<img src='".$row["link"]."'  height='200px' width='200px alt='Fujifilm FinePix S2950 Digital Camera'/>
            </a>
			
			  
			 
			</div>
			<div class='span6'>";

		?>		
				
				<?php
				
				//$largest = $highrow;
				$largest = $highrow["bid_price"];
				//$row1 = mysqli_fetch_array($highres,MYSQLI_ASSOC);
				//$hi= mysqli_free_result($highres);
				//$num_rows2 = mysqli_num_rows($highsql);

				$result1 = mysqli_query( $connect_db,"select * FROM bid where item_id = '$itid'");
				$num_rows1 = mysqli_num_rows($result1);
				
				$_SESSION["itmid"]=$row["item_id"];
				$_SESSION["buyer"]=$uid1;
				$var=$row['time_added'];
				$date_arr= explode(" ", $var);
				$varr= $date_arr[0];
				$tl=$row['time_period'];
				
				
				if($largest!=0) 
					$temp="Rs. "+$largest;
				else
					$temp="No bids";
				
				
				echo'
				<h3 style="color:white;font:40px;font-family:timeburnernormal"><b><i>'.$row["name"].'</i></b></h3>
				<hr class="soft"/>
				<strong style="line-height: 1.0;color:white;font-size:20px;font-family:timeburnernormal">Base Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Rs. '.$row["base_price"].' </strong></br></br></br>
				<strong style="line-height: 1.0;color:white;font-size:20px;font-family:timeburnernormal">Current Highest Bid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.  '.$temp.'</strong></br></br></br>
				<strong style="line-height: 1.0;font-size:20px;color:white;font-family:timeburnernormal">Number of Bids: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$num_rows1.'</strong></br></br></br>
				<strong style="line-height: 1.0;font-size:20px;color:white;font-family:timeburnernormal">Time Left: &nbsp;&nbsp;&nbsp;<font id="yo" style="font-size:15px;"> </font></strong></br></br>
				<form class="form-horizontal qtyFrm" action="php/addbidcheck.php" method="POST">
				  <div class="control-group">
					<label class="control-label" style="line-height: 1.0;font-size:20px;color:white;font-family:timeburnernormal"><strong><span>Your Bid : </strong></h4></label>
					<div class="controls">
					<input type="number" step="0.01" class="span2" placeholder="Amount" name="amt"/>

					  <button type="submit" class="btn btn-primary pull-right"> Submit </button>
					</div>
				  </div>
				</form>

				

				<hr class="soft clr"/>
				<strong style="line-height: 2.0;color:white;font-size:30px;font-family:timeburnernormal"> Specifications : </strong></br></br></br>
				<p style="font-size:20px;color:white;font-family:timeburnernormal""><i>'.$row["specification"].'
				</i>
				</p>'
				?>
				
				<script type="text/javascript">
				    var str = "<?php echo $varr ?>"; 
					var rem= "<?php echo $tl ?>";
					rem*=30*24*60*60*100;
				//	window.alert(rem);
					function getTimeRemaining(endtime){
					  var t = rem-( Date.parse(new Date())-Date.parse(endtime));
					 
					  var seconds = Math.floor( (t/1000) % 60 );
					  var minutes = Math.floor( (t/1000/60) % 60 );
					  var hours = Math.floor( (t/(1000*60*60)) % 24 );
					  var days = Math.floor( t/(1000*60*60*24) );
					  
					  
					  
					  return {
						'total': t,
						'days': days,
						'hours': hours,
						'minutes': minutes,
						'seconds': seconds
					  };
					}
					function initializeClock(id, endtime){
					  var clock = document.getElementById(id);
					  var timeinterval = setInterval(function(){
						var t = getTimeRemaining(endtime);
						clock.innerHTML = t.days  + ":"+
										   t.hours  +":"+
										    t.minutes  +":"+
										   t.seconds;
						if(t.total<=0){
						  clearInterval(timeinterval);
						}
					  },1000);
					}
					initializeClock('yo', str);
				</script>
				



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