<?php
session_start();
if (!isset($_SESSION['loginflag'])) {
	$_SESSION['loginflag']=0;
}
$flag = $_SESSION['loginflag'];
if ($flag==1)
	$msg = "Either Email or Password is incorrect.";
else
	$msg = "";
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
<div style="color:white;font-family:quango;font-size:100px;">BidX</div></br><br>

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
	    

	<div class="span9">       
	
	<div class="container">    
	  <div class="row"> 

	  	<div class="span4">
			
	  	<div class="col-md-6"> 
	    
	          <form class="form-horizontal" action="php/login.php" method="POST">
	          <fieldset>
	            <div id="legend">
	              <legend class="" style="color:white;font-family:timeburnernormal;font-size:25px;">Login</legend>
	            </div>

	            <div class="control-group">
	              <label class="control-label" for="email"  style="color:white;font-family:timeburnernormal;font-size:20px;">Email* :    </label>
	              <div class="controls">
	                <input type="email" id="degree" name="email" class="form-control input-lg " required="true">
	              </div>
	            </div>

	            <div class="control-group">
	              <label class="control-label" for="age"  style="color:white;font-family:timeburnernormal;font-size:20px;">Password* :    </label>
	              <div class="controls">
	                <input type="password" id="special" name="password" class="form-control input-lg" required="true">
	              </div>
	            </div>

	            <div class="control-group">
	            	<div class="controls">
	            		<?php echo $msg ?> 
	            	</div>
	            </div>

	            <div class="control-group" style="float: right;">
	            	<div class="controls">
	            		<a href="forgetpass.html"  style="color:white;font-family:timeburnernormal;font-size:20px;">Forgot Password?</a>
	            	</div>
	            </div>

	            <br><br>

	            <div class="control-group">
	              <!-- Button -->
	              <div class="controls">
	                <button class="btn btn-success" name="submit">Submit</button>
	              </div>
	            </div>
	          </fieldset>
	        </form>
	    
	    </div> 

	</div>

	<div class="span2"> &nbsp;</div>

	<div class="span4">
			
	  	<div class="col-md-6"> 
	    
	          <form class="form-horizontal" action="register1.php" method="POST">
	          <fieldset>
	            <div id="legend">
	              <legend class=""  style="color:white;font-family:timeburnernormal;font-size:25px;" >New to Website?</legend>
	            </div>

	            <div class="control-group">
	              <label class="control-label" for="email"  style="color:white;font-family:timeburnernormal;font-size:20px;">Name* :     </label>
	              <div class="controls">
	                <input type="name" id="degree" name="name" class="form-control input-lg " required="true">
	              </div>
	            </div>

	            
	            <br><br>

	            <div class="control-group">
	              <!-- Button -->
	              <div class="controls">
	                <button class="btn btn-success" name="submit"  >Submit</button>
	              </div>
	            </div>
	          </fieldset>
	        </form>
	    
	    </div> 

	</div>





	  </div>
	</div>
</div>
</div>
</div>
</div>

<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>

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