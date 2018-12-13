<?php

	session_start();
        if(isset($_SESSION["uid"]))
        {
            unset($_SESSION["uid"]);
            echo "<script> alert(\"You have been logged out\"); </script>";
            header("Location:../index.php");
        }
        else
        {
            header("Location:../index.php");
        }


?>