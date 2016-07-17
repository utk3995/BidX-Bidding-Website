<?php
session_start();
$amt1=$_POST['amt'];//this values comes from html file after submitting 
echo $amt1;
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $connection,"project");
if (!$connection)
{
die('Could not connect: ' . mysql_error());
}
$itmid1=$_SESSION["itmid"];    
$buyer1=$_SESSION["buyer"];
$_SESSION["amount"] = $amt1;


$sql = "select * from items where item_id='$itmid1'";
$res = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
$base1 = $row["base_price"];

$highsql = "SELECT * from bid WHERE item_id='$itmid1' ORDER BY bid_price DESC LIMIT 1";
$highres = mysqli_query($connection,$highsql);
$highrow = mysqli_fetch_array($highres,MYSQLI_ASSOC);
$largest = $highrow["bid_price"];

if($largest==0){ $largest=$base1; }

if ($amt1 < $largest){
	echo "<script type='text/javascript'>\n";
	echo "alert('Bid cannot be less then the current highest bid.');\n";
	echo "</script>";
}
else if ($amt1 == $largest){
	echo "<script type='text/javascript'>\n";
	echo "alert('Bid cannot be equal to the current highest bid.');\n";
	echo "</script>";
}
else if (($amt1 - $largest) > ($base1*0.05)){
	echo "<script type='text/javascript'>\n";
	echo "alert('The bid amount can exceed the highest bid by atmost 5% of the base price.');\n";
	echo "</script>";
}
else{
	header("location: ../addbidconfirm.php");
}

//$query = "INSERT INTO bid (item_id,buyer_id,bid_price) VALUES ('$itmid1','$buyer1','$amt1')";
//mysql_query($query);
?>