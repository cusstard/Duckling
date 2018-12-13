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
    <header><div id="header"><a href="../index.php"><img src="../img/logo.png" width="150px" alt="logo"></a>
    <?php
     if(isset($_SESSION["uid"])){
		echo "<div class='header'><div id='btn1'><a href='login.php' class='signup'>
        </div>
        ". $row['fname'] ."</a></div>
		<div class='header'><div id='btn2'>
        <img src='../img/button2.png' width='100px'></div>
        <a href='logout.php' class='signup'>LOG OUT</a></div>";
		 }
	 
     else{
      echo "<div class='header'><div id='btn1'>
        <img src='../img/button2.png' width='100px'></div>
        <a href='../html/login.html' class='signup'>LOGIN</a></div>
      <div class='header'><div id='btn2'>
        <img src='../img/button2.png' width='100px'></div>
        <a href='../html/signup.html' class='signup'>SIGN UP</a></div>
      </div>";
		}
	  ?>
	  
    </header>
    <nav>
    </nav>
    <main>
      <div class="contain">
      <div id="mainimg"><img src="../img/carousel3.jpg" width="100%" height="100%" alt="Room"></div>
      <div id="rect"><img src="../img/white_rect.png" width="450px" alt="logo"></div>
      <div id="start">
     <h2>Where are you going?</h2>
          <form method="POST" action="searchsession.php">
          <select name="cities" id="cities">
            <option value="Montreal">Montreal</option>
            <option value="Ottawa">Ottawa</option>
            <option value="Kingston">Kingston</option>
          </select><br><br>
          <input type="submit" value="Find homes" class="but">
          </form>
          </div>
          </div>  </main>
    <footer>
    </footer>
    <script src="../js/script.js"></script>
  </body>
</html>