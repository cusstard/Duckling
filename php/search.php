<?php

	session_start();
	if (!isset($_SESSION["uid"])){
	{
		header("Location:searchsession.php");	
		}
		
	include "connection.php";
	}/*
	else {
		echo "<h1>You have to be logged in to see available homes</h1><br><br><a href='../html/login.html' class='desc2'>Log in</a>";
		
		}*/
	
?>