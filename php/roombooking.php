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
      <div class="header">
      <div id="btn1">
        <a href="../php/userprofile.php" class="icon"><img src="../img/icons/profile.svg" height="30px" alt="logo"></a></div>
      <div id="btn2">
        <img src="../img/button2.png" width="100px" alt="logo"></div>
        <a href="logout.php" class="signup">LOG OUT</a></div>
      </div>
    </header>
    <nav>
    </nav>
    <main>
    <div class="contain">
	<h1>Book a room</h1><br>
	<form method="POST" action="booking.php">

		<label class="desc2">Persons</label>
		<select name="persons" id="persons">
        <option>1 person</option>
		<option>2 persons</option>
        <option>3 persons</option>
		<option>4 persons</option>
        </select><br>
		<label class="desc2">From</label>
		<input type="date" name="from"><br>
        <label class="desc2">To</label>
		<input type="date" name="to"> <br><br>

	    <input type="submit" value="Checkout" class="but"> <br><br>
	</form>
    </div>
    </main>
    <footer>
    </footer>
    <script src="../js/script.js"></script>
  </body>
</html>