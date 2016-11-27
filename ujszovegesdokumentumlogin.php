<?php
function loginf(){
	$username = $_POST["username"];
	$password = $_POST["password"];
	session_start();
	//unset($_SESSION);
    $_SESSION['username']=$username;
	$db = mysqli_connect('localhost', 'root', '');
	
	if(!$db){
		die('Connection error: '.mysql_error());
	}
  
	$table = mysqli_select_db($db,'ujadatbazisdokumentum');
  
	if(!$table){
		die('Table selection error: '.mysql_error());
	}
  
	$queryString = "SELECT * FROM ujtabladokumentum WHERE username='$username';";
	$resultid = mysqli_query($db,$queryString);
  
	if(!$resultid){
		die("Hibás felhasználó név vagy jelszó");//'Select query error: '.mysql_error());
	}
  
	$result = mysqli_fetch_assoc($resultid);
	
  
	if($result['password']==$password&&$password!=null){
		$_SESSION['isloggedin']=true;
		$_SESSION['userdatas'] = $result;
		header("Location: /ujprojekt/index.php");
        exit;
 }
	else{
		print "Hibás jelszó";
	}
}

  ?>
<html>
	<head>
		<title>Új szöveges dokumentum</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="ujszovegesdokumentum.css"/>
		<script src="ujjavasskriptmappa/ujszovegesdokumentum.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="main">
			<h2>Lépj be az Uj szöveges dokumentum corporation weboldalára</h2>
			<form id="form_id" method="post" name="myform">
			<label>User Name :</label>
			<input type="text" name="username" id="username"/>
			<label>Password :</label>
			<input type="password" name="password" id="password"/>
			<input type="submit" name="send" value="Login" id="submit" onclick="validate()"/>
			</form>
				<div class="regi-link">
				<p>Nincs még felhasználod ezen nagyszerű oldalon ?</p> 
				<p>És ezáltal nem tudsz Új szöveges postokat létrehozni?</p> 
				<a class="link" href="/ujRegistraciosDokumentum.php">Ide</a> Kattintva regisztrálhatsz
				</div>
				<?php 
				if(isset($_POST['send']))
				{
				   loginf();
				} 
				?>
			</div>
		</div>
	</body>
</html>