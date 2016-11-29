<?php
session_start();
	$User = $_SESSION['userdatas'];
	
	if($_SESSION['isloggedin'] != true ){
		header("Location: /ujszovegesdokumentumlogin.php");
	}
	
	if($User["Munka"]== null || $User["Suli"] == null || $User["TeljesNev"]== null )
	{
		if($_SESSION["movetofirst"] != true)
		{
			header("Location: /ujprojekt/ujszovegesdokumentumadatmegadas.php");
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Új Szöveges Dokumentum</title>
  <script>document.createElement( "picture" );</script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <link rel="stylesheet" href="css/ujszovegesindexcss.css">
</head>

<body>
  <div class="row full-width-row header">
    <header class="coffee-span-12">
      <div class="container header-container">
        <h1 class="page-heading">Új Szöveges Dokumentum</h1>
        <p class="paragraph tagline">Hozz létre új szöveges postokat<br>
        </p>
      </div>
    </header>
  </div>
  <main class="row">
    <div class="coffee-span-88">
      <div class="coffee-span-8">
        <h2 class="heading-1">Profilod</h2>
   		<p class="paragraph">Név: <?php print($User["TeljesNev"]);?></p>
		<p class="paragraph">E-mail: <?php print($User["email"]);?></p>
          <hr> 
      <h2 class="heading-1">Rólam</h2>
     <p class="paragraph">Jelenlegi munkahelye: <?php print($User["Munka"]);?></p>
	 <p class="paragraph">Legmagasabb végzetség: <?php print($User["Suli"]);?></p>
	 <p class="paragraph">Kapcsolata: <?php if($User["Kapcsolat"] == "")print("Nincs kacsolatban");else print($User["Kapcsolat"]);?></p>
        <hr>
    </div>
		<div class="coffee-span-4">
      <h2 class="heading-1">Szöveges Postok</h2>
		<div class="coffee-span-411">
		<form action="" method="POST">
			<textarea name="TextField"> Easy! You should check out MoxieManager!</textarea>
			<input type="submit" Value="Küldés"></input>
		</form><?php
		if(isset($_POST["TextField"]))
		{
			$date =date('m/d/Y', time());
			$usname =$User['username'];
			$usid=$User['id'];
			$TextFieldText=$_POST['TextField'];
			$db = new mysqli('localhost', 'root', '','ujadatbazisdokumentum');
			$sql="INSERT INTO ujtabladokumentumpost (Text, CreatonDate, Likes, OwnerUser, UserID) VALUES ('$TextFieldText', '$date', 0,'$usname', '$usid');";
			echo "elküldve";
			$db->query($sql);
		}
		$db = new mysqli('localhost', 'root', '','ujadatbazisdokumentum');
		$rawdata=$db->query("SELECT * FROM ujtabladokumentumpost");
		while ($row = mysqli_fetch_assoc($rawdata)){
		echo "<div class="."posts".">".
				"<div class="."textcon".">".$row['Text']."</div>".
				"<div class="."userdateboth".">".
				"<div class="."usercon".">".$row['OwnerUser']."</div>".
				"<div class="."datecon".">".$row['CreatonDate']."</div>".
			 "</div>".
			 "</div>";
		
		}
		?>
		</div>
		</div>
		<div class="coffee-span-45">
			<p>
		</div>
    </div>
    
    </div>
  </main>
  <div class="row full-width-row footer">
    <div class="coffee-span-12">
      <footer class="subgrid">
        <div class="row">
		<ul><a class="link-text footer-nav" href="/ujprojekt/ujkijelentekzodokumentum.php">Kijelentkezés</a></ul>
          <div class="coffee-span-3 hidden-column"></div>
		  
          <div class="coffee-span-9 coffee-880-span-12">
            <hr>
          </div>
	 </footer>
        </div>
        <div class="row">
		
          <div class="coffee-span-12">
		  
            <div class="rule rule-1">
			
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="coffee-span-3 hidden-column"></div>
          <div class="coffee-span-9 coffee-880-span-12">
            </p>
          </div>
        </div>
     
    </div>
  </div>
</body>

</html>