<?php
function loginf(){
	$username = $_POST["username"];
	$password = $_POST["password"];
	session_start();
	//unset($_SESSION);
    $_SESSION['username']=$username;
	$db = mysql_connect('localhost', 'root', '');
	
	if(!$db){
		die('Connection error: '.mysql_error());
	}
  
	$table = mysql_select_db('ujadatbazisdokumentum', $db);
  
	if(!$table){
		die('Table selection error: '.mysql_error());
	}
  
	$queryString = "SELECT * FROM ujtabladokumentum WHERE username='$username';";
	$resultid = mysql_query($queryString, $db);
  
	if(!$resultid){
		die('Select query error: '.mysql_error());
	}
  
	$result = mysql_fetch_assoc($resultid);
	print_r($result);
  
	if( $result['password']==$password&&$password!=null){
		$_SESSION['isloggedin']=true;
		$_SESSION['userdatas'] = $result;
		header("Location: /ujprojekt/index.php");
        exit;
 }
	else{
		
	}
}
 if(isset($_POST['send']))
{
   loginf();
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
			</div>
		</div>
	</body>
</html>