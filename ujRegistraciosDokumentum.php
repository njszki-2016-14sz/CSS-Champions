<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Uj Sz�veges Dokumentum</title>
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
  <input type="text" name="usname" value="Felhaszn�l�n�v"/>
  <span id="strength"></span>
  <input name="passwordi" id="password" type="password" onkeyup="passwordChanged();" />
  <input type="password" name="passwordconf" value="Jelsz� Meger�s�t�se"/>
  <input type="text" name="email" value="E-mail c�m"/>
  <input type="text" name="emailconf" value="E-mail c�m Meger�s�t�se"/>
  <input type="submit" name="button" value="Regiszt�ci�"/>

	<?php
	function registerf(){
  $name=$_POST['usname'];
  $password=$_POST['password'];
  $passwordconf=$_POST['passwordconf'];
  $email=$_POST['email'];
  $emailconf=$_POST['emailconf'];
  if (isset($name)&&isset($password)&&isset($passwordconf)&&isset($email)&&isset($emailconf)&&$password==$passwordconf&&$emailconf==$email) {
$servername = "localhost";
$username = "root";
$dbname = "ujadatbazisdokumentum";
$conn = new mysqli($servername, $username, "", $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO ujtabladokumentum (username, password, email)
VALUES ('$name', '$password', '$email');";
if ($conn->query($sql) === TRUE) {
    echo "Sikeres regisztr�ci�";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
print $password;
print $passwordconf;
if($password!=$passwordconf){echo "<h2>Nem egyeznek a jelsz�k</h2>";}
if($email!=$emailconf){echo "<h2>Nem egyeznek az e-mailc�mek</h2>";}
 }
 if(isset($_POST['send']))
{
   registerf();
} 
?>
    </div>
  </form>
	</div>
</body>
</html>
  