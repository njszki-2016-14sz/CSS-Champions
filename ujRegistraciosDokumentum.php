<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Uj Szöveges Dokumentum</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/png" href="Text-txt.svg"/>
	<link rel="stylesheet" type="text/css" href="ujszovegesdokumentum.css"/>
	<script src="ujjavasskriptmappa/ujszovegesdokumentum.js"></script>
	<script src="ujjavasskriptmappa/jquery-3.1.1.js"></script>
  </head>
  <body>
	<div class="container">
  <form action="" method="post">
    <div class="main">
	<h2>Regisztráció</h2>
	<span>Username</span>
	<input type="text" name="usname" value=""/>
	<span id="strength">Type Password</span>
	<input name="password" id="password" type="password" onkeyup="passwordChanged();" onkeydown="passwordconfChanged()" />
	<span id="pasconfspan">Confirm password</span> 
	<input type="password" id="passwordconf" name="passwordconf" value="" onkeyup="passwordconfChanged();"/>
	<span id="e-mailspan">Type your e-mail adress</span>
	<input type="text" name="email" id="e-mail" value="" onkeyup="emailChanged()"/>
	<span id="e-confspan">Confirm your e-mail adress</span>
	<input type="text" name="emailconf" id="e-conf" value=""/>
	<input type="submit" name="submit" value="Regisztáció"/>
	
<?php
	function registerf(){
	$name=$_POST['usname'];
	$password=$_POST['password'];
	$passwordconf=$_POST['passwordconf'];
	$email=$_POST['email'];
	$emailconf=$_POST['emailconf'];
	$emailreg;
	if($password!=$passwordconf)
		echo "<h2>Nem egyeznek a jelszók</h2>";
	
	else if($email!=$emailconf)
		echo "<h2>Nem egyeznek az e-mailcímek</h2>";
	
	else if(strlen($password)<6)
		echo "<h2>Jelszónak minimum 6 karakter hosszúnak kell lennie</h2>";
	
	else if($email!=$emailconf)
		echo "<h2>Nem egyeznek az e-mailcímek</h2>";
	
	else
	{
	
		if (isset($name)&&isset($password)&&isset($passwordconf)&&isset($email)&&isset($emailconf)&&$password==$passwordconf&&$emailconf==$email) 
		{
			$servername = "localhost";
			$username = "root";
			$dbname = "ujadatbazisdokumentum";
			$conn = new mysqli($servername, $username, "", $dbname);
			
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT * FROM ujtabladokumentum WHERE username LIKE ('$name');";
			$asd=$conn->query($sql);
			$result = $asd->fetch_row();
			
			if ($result['1']!=$_POST['usname'])
			{ 
				$sql = "SELECT * FROM ujtabladokumentum WHERE email LIKE ('$email');";
				$asd=$conn->query($sql);
				$result = $asd->fetch_row();
			
				if ($result['3']!=$_POST['email']) 
				{	
					$conn = new mysqli($servername, $username, "", $dbname);
					if ($conn->connect_error) 
						die("Connection failed: " . $conn->connect_error);
			
			
			
					$sql = "INSERT INTO ujtabladokumentum (username, password, email)
					VALUES ('$name', '$password', '$email');";
					echo "Sikeres regisztráció";
					$conn->query($sql);
					header("Location: /ujszovegesdokumentumlogin.php");
				}
		
				else {echo "Error: " . "The email is already taken" . "<br>" . $conn->error;}

			}
			else {echo "Error: " . "The username is already taken" . "<br>" . $conn->error;}
		}
	}
 }
 if(isset($_POST['submit']))
{
   registerf();
   
} 
?>
    </div>
  </form>
	</div>
</body>
</html>
  