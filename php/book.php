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
    </header>
    <nav>
    </nav>
    <main>
      <div class="contain">
      <?php
	  session_start();
        if(isset($_SESSION["uid"]))
        {
			header("Location:roombooking.php");
		}
		else{
			echo "<h1>You have to be logged in to book a room</h1><br><br><a href='../html/login.html' class='desc2'>Log in</a>";
			}
	  
	  ?>
</div>
</main>

</body>
</html>