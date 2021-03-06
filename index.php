<?php

	session_start();
	include "connection.php";
?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Duckling - find a place to stay anywhere</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Itim|Share|Ubuntu" rel="stylesheet">
  </head>
  <body>
    <header>
    <div id="header"><a href="index.php"><img src="img/logo.png" width="150px" alt="logo"></a>
    <?php
     if(isset($_SESSION["uid"])){
		echo "<div class='header'><div id='btn1'>
        <a href='../php/userprofile.php' class='icon'><img src='../img/icons/profile.svg' height='30px'></a></div><div id='btn2'>
        <img src='img/button2.png' width='100px' alt='button'></div>
        <a href='php/logout.php' class='signup'>LOG OUT</a></div>";
		 }
	 
     else{
      echo "<div class='header'><div id='btn1'>
        <img src='img/button2.png' width='100px' alt='button'></div>
        <a href='html/login.html' class='signup'>LOGIN</a></div>
      <div class='header'><div id='btn2'>
        <img src='img/button2.png' width='100px' alt='button'></div>
        <a href='html/signup.html' class='signup'>SIGN UP</a></div>
      </div>";
		}
	  ?>
	  
    </header>
    <nav>
    </nav>
    <main><div class="contain">
      <div id="mainimg"><img src="../img/carousel.jpg" width="100%" height="100%" alt="Room"></div>
      <div id="rect"><img src="../img/white_rect.png" width="450px" alt="logo"></div>
      <div id="start">
        <h2>Start exploring places to <br>stay all over the globe</h2>
        <a href="php/searchpage.php" class="desc2"><br>Browse homes</a>
      </div>
      </div>
      <div class="row">
    <div class="col">
      <p class="titles">FIND HANGOUTS</p>
      <div class="else_t">
      <p class="else">Hosts open their homes and share their lives. Connect and be inspired.</p>
      </div>
      </div>
    <div class="col">
      <p class="titles">FIND A HOST</p>
      <div class="else_t">
      <p class="else">Connect with hosts, and confirm your stay through the Duckling platform. </p>
      </div>
      </div>
    <div class="col">
      <p class="titles">FIND EVENTS</p>
      <div class="else_t">
      <p class="else">Meet travelers in other cities, or in your own city! There's always something new to join.</p>
      </div>
    </div>
    </div>
    </main>
    <footer>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>