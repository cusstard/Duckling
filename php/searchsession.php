

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
     <div id="header"><a href="../index.php"><img src="../img/logo.png" width="150px" alt="logo"></a>
    <?php
     if(isset($_SESSION["uid"])){
		echo "<div class='header'><div id='btn1'><a href='../php/login.php' class='signup'>
        </div>
        ". $row['fname'] ."</a></div>
		<div class='header'><div id='btn2'>
        <img src='../img/button2.png' width='100px' alt='button'></div>
        <a href='../php/logout.php' class='signup'>LOG OUT</a></div>";
		 }
	 
     else{
      echo "<div class='header'><div id='btn1'>
        <img src='../img/button2.png' width='100px' alt='button'></div>
        <a href='../html/login.html' class='signup'>LOGIN</a></div>
      <div class='header'><div id='btn2'>
        <img src='../img/button2.png' width='100px' alt='button'></div>
        <a href='../html/signup.html' class='signup'>SIGN UP</a></div>
      </div>";
		}
	  ?>
    </header>
    <nav>
    </nav>
    <main>
    <div class="roomcontain">
<?php


$city=$_POST['cities'];

include "connection.php";

 $sql="SELECT * FROM duckling_rooms where 			                   location='$city'";
 $result=mysqli_query($con,$sql);
 
 		echo "<h1>Homes available in " . $city ."</h1>";
	while($row=mysqli_fetch_assoc($result))
			{	
		echo "<div class='roomimg'>
        <img src=". $row['img_path_sm']. " width='180px' alt='Room'>
        </div>
        <div class='roomdesc'>
          <a href=". $row['link']. " class='desc2'>" . $row['title'] . "</a>
          <p class='desc1'>" .$row['room_desc']. "</p>
          <p class='desc'>$" .$row['price']. " per night</p>
          <a href=". $row['link']. " class='roomlink'>Read more...</a>
        </div>";
			 }
	
	/*else {
			echo "<p class='desc2'>Sorry, there are no homes available in " . $city ."</p>";
			}*/
?>
</div>
</main>
<footer>
    </footer>
    <script src='js/script.js'></script>
  </body>
</html>
