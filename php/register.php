<?php
session_start();
$database="project"; //
$name1=$_SESSION['name'];//
$city1=$_POST['city'];  //
$pincode1=$_POST['pincode']; //
$dob1=$_POST['dob']; //
$email1=$_POST['email']; //
$password1=$_POST['password']; //
$address1=$_POST['address'];  //
$contact1=$_POST['phone']; //
$cardno1=$_POST['cardno']; //
$cardname1=$_POST['cardname']; //
$cardtype1=$_POST['cardtype']; //
$credit1=500;    

$user_name = "root";
$database = "project";
$host_name = "localhost"; 

$connect_db=new mysqli($host_name, $user_name, "");
$find_db=mysqli_select_db($connect_db,$database);
   
//$query = "INSERT INTO users (name,password,email,dob,contact,card_details,card_type,card_name,address,city,pincode) VALUES ('$name1','$password1','$email1','$dob1','$contact1','$cardno1','$cardtype1','$cardname1','$address1','$city1','$pincode1')";

$query1 = "INSERT INTO user_email (email) VALUES ('$email1')";
$res1 = mysqli_query($connect_db,$query1);

$sql1="select * from user_email where email='$email1'";
$res2 = mysqli_query($connect_db,$sql1);
$row1 = mysqli_fetch_array($res2);
$uid1 = $row1['user_id'];

$query2 = "INSERT INTO user_account (user_id,card_no) VALUES ('$uid1','$cardno1')";
$res2 = mysqli_query($connect_db,$query2);

$query3 = "INSERT INTO user_address (user_id,address,city) VALUES ('$uid1','$address1','$city1')";
$res3 = mysqli_query($connect_db,$query3);

$query4 = "INSERT INTO user_details (user_id,name,dob,password,pincode,credit) VALUES ('$uid1','$name1','$dob1','$password1','$pincode1','$credit1')";
$res4 = mysqli_query($connect_db,$query4);

$query5 = "INSERT INTO user_phone (user_id,phone) VALUES ('$uid1','$contact1')";
$res5 = mysqli_query($connect_db,$query5);

$query6 = "INSERT INTO account (card_no,card_type,card_name) VALUES ('$cardno1','$cardtype1','$cardname1')";
$res6 = mysqli_query($connect_db,$query6);


echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>"; 

$_SESSION['email']=$email1; 
header("location: ../homepage.php"); 

mysqli_close($connect_db);
?>