<?php
session_start(); 
$error='';
if (isset($_POST['submit'])) {
{
$email1=$_POST['email'];
$password1=$_POST['password'];

$user_name = "root";
$database = "project";
$host_name = "localhost"; 

$connect_db=new mysqli($host_name, $user_name,"");

$find_db=mysqli_select_db($connect_db,$database);
if ($find_db) {

}
else 
{
die ("Database does not exist");
}

$email1 = stripslashes($email1);
$password1 = stripslashes($password1);

$sql1="select * from user_email where email='$email1'";
$res1 = mysqli_query($connect_db,$sql1);
$row1 = mysqli_fetch_array($res1);

$uid1 = $row1['user_id'];

$sql2="select * from user_details where user_id='$uid1'";
$res2 = mysqli_query($connect_db,$sql2);
$row2 = mysqli_fetch_array($res2);
$pass1 = $row2['password'];

if ($pass1 == $password1){
	$_SESSION['email']=$email1; 
	$_SESSION['buyid']=$row['user_id'];
	header("location: ../homepage.php");
} 
else {
	header("location: ../index.php");
	$_SESSION['loginflag']=1;
}
mysqli_close($connect_db); 
}
}
?>