
<?php

session_start();
        if(!isset($_SESSION["uid"]))
        {
            header("Location:../index.php");
        }
		
		else{
			
			include "connection.php";
			
			$en=$_SESSION["uid"];
			$sql="SELECT * FROM duckling_users where 			                   email='$en'";
			$result=mysqli_query($con,$sql);
			
			$num_rows=mysqli_num_rows($result);
			if($num_rows==1){
				
			
			while($row=mysqli_fetch_assoc($result))
			{
				$fn=$row['fname'];
				$ln=$row['lname'];
			}
			
			}
			
			
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
	<h1>Update profile</h1><br>
    <div class="contain">
	<form method="POST" action="updateForm.php">

		<label class="desc2"> First name</label>
		<input type="text" name="fname" id="fname" value=<?php echo $fn; ?> > <br><br>

		<label class="desc2"> Last name</label>
		<input type="text" name="lname" id="lname" value=<?php echo $ln; ?>> <br><br>

	    <input type="submit" value="Update info" class="but"> <br><br>
	</form>
</div>
</main>

</body>
</html>