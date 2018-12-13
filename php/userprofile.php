<?php 
        session_start();
        if(!isset($_SESSION["uid"]))
        {
            header("Location:profile.php");
        }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Duckling - find a place to stay anywhere</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Itim|Share|Ubuntu" rel="stylesheet">
  </head>
  <body>
    <header>
      <div id="header"><a href="../index.php"><img src="../img/logo.png" width="150px" alt="logo" alt="logo"></a>
      <div class="header">
      <div id="btn1">
        <a href="userprofile.php" class="icon"><img src="../img/icons/profile.svg" height="30px" alt="logo"></a></div>
        <div id="btn2">
        <img src="../img/button2.png" width="100px" alt="logo"></div>
        <a href="logout.php" class="signup">LOG OUT</a></div>
      </div>
    </header>
    <nav>
    </nav>
    <main>
    <div class="contain">
    <?php
	
	include "connection.php";
	$en=$_SESSION["uid"];
	$sql="SELECT * FROM duckling_users WHERE email='$en'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result))
		{
			echo "<h1> Welcome ". $row['fname'] . " ".  $row['lname']  ."</h1>";
            echo "<p class='desc2'>Name : " . $row['fname'] . " " . $row['lname']. "<br><br>";
            echo "E-mail : ". $row['email']. "<br><br>"; 
			}
			echo "<a href='update.php' class='desc2'>Update Profile</a><br><br>";
			echo "<a href='searchpage.php' class='desc2'>Browse homes</a>";

			mysqli_close($con);
	?>
    </div>
    </main>
    <footer>
    </footer>
    <script src="../js/script.js"></script>
  </body>
</html>