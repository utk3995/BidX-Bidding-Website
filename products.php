<?php
        session_start();
        $email1=$_SESSION['email'];
		
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db( $connection,"project");
       $query = mysqli_query( $connection,"select * from user_email join user_details on user_details.user_id=user_email.user_id where user_email.email='$email1'");
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$name1 = $row['email'];
		$var= $_GET['var'];	
		$nm=$row['name'];
?>
<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

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
<div class="span9">
	

<br class="clr"/>




	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			
				




					<?php
					//echo $var;
				$sql = "select * from items where commodity_type='$var' ";
				//$jk= "select * from items,bid where bid.item_id=items.item_id";
					//$none= mysqli_num_rows($jk);
					
				//echo $var;
					$res = mysqli_query($connect_db,$sql);
					//echo $res;
					if (!$res) {
						printf("Error: %s\n", mysqli_error($connect_db));
						exit();
					}

					
					$i=0;
					while($row = mysqli_fetch_array($res)){
						$itid=$row["item_id"];
						//echo $itid;
						$result1 = mysqli_query( $connect_db,"select * FROM bid where item_id = '$itid'");
						$num_rows1 = mysqli_num_rows($result1);
						
						$highsql = "SELECT * from bid WHERE item_id='$itid' ORDER BY bid_price DESC LIMIT 1";
						$highres = mysqli_query($connect_db,$highsql);
						$highrow = mysqli_fetch_array($highres,MYSQLI_ASSOC);

						if (!$highres) {
							printf("Error: %s\n", mysqli_error($connect_db));
							exit();
						}
						if($highrow["bid_price"]!=0)
							
							$temp=$highrow["bid_price"];
						else
							$temp=$row["base_price"];
							
							$var=$row['time_added'];
						$date_arr= explode(" ", $var);
						
						$varr= $date_arr[0];
						$tl=$row['time_period'];	
							
							echo "
				<li class='span3'>
				  <div class='thumbnail'>
				  <i class='tag'></i>
					<h5> ".$row["name"]." </h5>
					<a href='product.php?var=".$row["item_id"]."'><img src='".$row["link"]."' alt='' height='100px' width='100px'></a></br>
					<div class='caption'>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<b>Max Bid : </b></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Base Price</b>Rs.". $temp."</a>
					  </br>
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>No of Bids:</b> ". $num_rows1."
					  
					</div>
				</div>
				</li>";
					}
				?>
				<script type="text/javascript">
				    var str = "<?php echo $varr ?>"; 
					var rem= "<?php echo $tl ?>";
					rem*=30*24*60*60*100;
			//		window.alert(rem);
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
					initializeClock('yo1', str);
				</script>

				  
			
		  </ul>
	<hr class="soft"/>
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