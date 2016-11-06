<?php
include 'connection.php';
$admin_name = $_POST["username"];
$password =$_POST["password"];
$q = "SELECT * FROM admin WHERE username = '"
    . $admin_name . "'" . " AND password ='" .$password . "'";

echo "query" . $q; 
$r = mysqli_query($connection,$q) or die(mysqli_error());

if ($obj = mysqli_fetch_assoc($r)) {
	session_start();
	$_SESSION["valid_id"] = $obj['userID'];
	$_SESSION["valid_admin"] = $admin_name;
	$_SESSION["valid_time"] = time();
	
	echo $_SESSION["valid_id"];
	echo $_SESSION["valid_admin"];
	echo $_SESSION["valid_time"]; 
	
	header("location: ../../Markus/admin.php"); 
	}else{
		header("location: ../../Markus/adminlogin.php");
	}
?>