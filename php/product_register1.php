<?php
$database="project"; //database name
session_start();
$email1=$_SESSION['email'];
$name=$_POST['item_name'];//this values comes from html file after submitting 
$type=$_POST['item_type'];
$age=$_POST['age'];
$b_time=$_POST['item_bid_time'];
$company=$_POST['company'];
$base_price=$_POST['item_base_price'];
$info=$_POST['other_infor'];


$target_dir = "../themes/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
 if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd field is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,"$database");


    $query1 = mysqli_query($con,"select * from user_email where email='$email1'");
        $row = mysqli_fetch_array($query1, MYSQLI_ASSOC);
        $name1 = $row['user_id'];


/*$maxDigit=5; //maximum digit of ur number
$currentNumber=020;  //example this is your last number in database all we need to do is remove the zero before the number . i dont know how to remove it
$count=strlen($currentNumber); //count the digit of number. example we already removed the zero before the number. the answer here is 2
$numZero="";
for($count;$count<=$maxDigit;$count++)
     $numZero=$numZero+"0";

$newNum=$newNum+$currentNumber;*/



//$leave=1;


$query = "INSERT INTO items (name,seller_id,commodity_type,company,base_price,months_old,time_period,specification,link) 
			VALUES ('$name','$name1','$type','$company','$base_price','$age','$b_time','$info','$target_file')";
mysqli_query($con,$query);

echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>"; 


//header("location: ../homepage.php"); // Redirecting To Other Page

mysqli_close($con);
?>






