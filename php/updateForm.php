<?php

session_start();

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$en=$_SESSION['email'];

	include "connection.php";
	$sql="UPDATE duckling_users SET fname='$fn' lname='$ln' WHERE email='$en'";
	mysqli_query($con,$sql);
	
	mysqli_close($con);
	header("Location:userprofile.php");
	
	

?>