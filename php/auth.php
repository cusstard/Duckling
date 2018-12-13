<?php

$fn=$_POST['fname'];
$ln=$_POST['lname']; 
$passwd=md5($_POST['psw']);
$en=$_POST['email'];

	include "connection.php";
	$sql="INSERT INTO duckling_users (fname, lname, psw, email) VALUES ('$fn', '$ln', '$passwd', '$en')";  //this is sql command
	
	if(mysqli_query($con, $sql)){  //function
		session_start();           //function
		$_SESSION['uid']=$en;      //array
		header("Location:userprofile.php");	 //change to profile page	
		}
	else{
		echo "Connection error". mysqli_error($con);
		}
	mysqli_close($con);

?>