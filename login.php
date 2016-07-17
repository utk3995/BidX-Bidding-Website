<?php
	$email =  $_POST["email"];
	$password =  $_POST["password"];
	if($email == "pranjit" && $password == "ramdia"){
		header('Location: index.php');
		exit;
	}
?>