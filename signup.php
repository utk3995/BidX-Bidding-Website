<?php
	ob_start();
	require_once('db_connect.php');
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$cpass = $_POST['cpass'];
	if($password != $cpass){
		echo '<script type="text/javascript">alert("Please confirm your password !");location="signup.html";</script>';
		die();
	}
	$sql = "SELECT * FROM user WHERE email='$email'";
	$result = mysqli_query($db, $sql);// or die("Signup System Failed");
	$row = mysqli_fetch_array($result,MYSQLI_BOTH);
	if(mysqli_num_rows($result)==0) {
		$sql1= "INSERT INTO user values(default,'$email','$password')";
		$result = mysqli_query($db, $sql1);
		if(!$result){ 
			echo mysql_error();
			die();
		}

		$sql2= "SELECT user_id FROM user WHERE email='$email'";
		$result = mysqli_query($db, $sql2);
		$row = mysqli_fetch_assoc($result);
		$user_id=$row["user_id"];
		
		$firstname = $_POST['fname'];
		$lasttname = $_POST['lname'];
		$sql3= "INSERT INTO username values('$user_id','$firstname','$lasttname')";
		$resullt=mysqli_query($db, $sql3);
		if(!$result){ 
			echo mysql_error();
			die();
		}

		$phn_no = $_POST['phone'];
		$acc_no = $_POST['account_no'];
		$card_no = $_POST['card_no'];
		$card_type = $_POST['card_type'];
		$bank_name = $_POST['bankname'];
		$sql4 = "INSERT INTO user_details values('$user_id','$acc_no','$phn_no')";
		$sql5= "INSERT INTO account values('$acc_no','$card_no','$card_type','$bank_name')";
		$result=mysqli_query($db, $sql4);
		if(!$result){ 
			echo mysql_error();
			die();
		}
		$result=mysqli_query($db, $sql5);
		if(!$result){ 
			echo mysql_error();
			die();
		}

	}
	else{
   		echo '<script type="text/javascript">alert("The email address '. $_POST['email'].' is already registered");location="signup.html";</script>';
   		exit();
	}
	ob_flush();
?>