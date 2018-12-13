<?php

$en=$_POST['uid'];
$ps=md5($_POST['psw']);

	include "connection.php";
	
	$sql="SELECT * FROM duckling_users WHERE email='$en' AND 		     psw='$ps'";
	
	$result=mysqli_query($con, $sql);
	$num_rows=mysqli_num_rows($result);
	
	if($num_rows==1) {
		session_start();
		$_SESSION['uid']=$en;
		
		mysqli_close($con);
		header("Location:userprofile.php");
	}
	
	else{
		echo "<p class='desc2'>An error occured</p>". mysqli_error($con);
		}
	
	
?>