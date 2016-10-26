<?php
$username = $_POST["username"];
$password = $_POST["password"];
print_r($_POST);
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
	 print("siker");
 }
  ?>
<html>
<head>
<title>Új szöveges dokumentum</title>
<!-- Include CSS File Here -->
<link rel="stylesheet" href="ujszovegesdokumentum.css"/>
<!-- Include JS File Here -->
<script src="Új JÁVASKRIPT mappa/Új szöveges dokumentum.js"></script>
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
<input type="submit" value="Login" id="submit" onclick="validate()"/>
</form>
</div>
</div>
</body>
</html>