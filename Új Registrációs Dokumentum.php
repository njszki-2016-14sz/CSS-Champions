<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Uj Sz�veges Dokumentum</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="�j sz�veges dokumentum.css"/>
  </head>
  <body>
	<div class="container">
  <form action="" method="post">
    <div class="main">
  <input type="text" name="usname" value="Felhaszn�l�n�v"/>
  <input type="password" name="password" value="Jelsz�"/>
  <input type="password" name="passwordconf" value="Jelsz� Meger�s�t�se"/>
  <input type="text" name="email" value="E-mail c�m"/>
  <input type="text" name="emailconf" value="E-mail c�m Meger�s�t�se"/>
  <input type="button" name="button" value="Regiszt�ci�"/>

	<?php
  $name=$_POST["name"];
  $password=$_POST['password'];
  $passwordconf=$_POST['passwordconf'];
  $email=$_POST['email'];
  $emailconf=$_POST['emailconf'];
  if (isset($name)&&isset($password)&&isset($passwordconf)&&isset($email)&&isset($emailconf)&&$password==$passwordconf&&$emailconf==$email) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ujadatbazisdokumentum";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO ujtabladokumentum (username, password, email)
VALUES ('$name', '$password', '$email')";
}
if($password!=$passwordconf){echo "<h2>Nem egyeznek a jelsz�k</h2>"}
if($email!=$emailconf){echo "<h2>Nem egyeznek az e-mailc�mek</h2>"}
?>
    </div>
  </form>
	</div>
</body>
</html>
  