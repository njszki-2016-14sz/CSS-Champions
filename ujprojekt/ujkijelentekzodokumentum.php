<?php 
session_start();
$User = $_SESSION['userdatas'];
print_r($User);
	if($User != null){
		$_SESSION['isloggedin'] = false;
		header("Location: /ujprojekt/index.php");
	}
	else{
		header("Location: /ujprojekt/index.php");
	}