<?php
session_start();
	$User = $_SESSION['userdatas'];
	
	if($_SESSION['isloggedin'] != true ){
		header("Location: /ujszovegesdokumentumlogin.php");
	}
	print_r($User);
	
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
      <ul><div class="coffee-span-8">
        <h2 class="heading-1">Profilod</h2>
   		<p class="paragraph">Név: <?php print($User["TeljesNev"]);?></p>
		<p class="paragraph">E-mail: <?php print($User["email"]);?></p>
          <hr> 
      <h2 class="heading-1">Rólam</h2>
     <p class="paragraph">Jelenlegi munkahelye: <?php print($User["Munka"]);?></p>
	 <p class="paragraph">Legmagasabb végzetség: <?php print($User["Suli"]);?></p>
	 <p class="paragraph">Kapcsolata: <?php print($User["Kapcsolat"]);?></p>
        <hr>
    </div></ul>
		<ul><div class="coffee-span-4">
      <h2 class="heading-1">Szöveges Postok</h2>
      </div></ul>
    </div>
    
    </div>
  </main>
  <div class="row full-width-row footer">
    <div class="coffee-span-12">
      <footer class="subgrid">
        <div class="row">
          <div class="coffee-span-3 hidden-column"></div>
          <div class="coffee-span-9 coffee-880-span-12">
            <ul><a class="link-text footer-nav" href="/ujprojekt/ujkijelentekzodokumentum.php">Kijelentkezés</a></ul>
          </div>
        </div>
        <div class="row">
          <div class="coffee-span-12">
            <div class="rule rule-1">
              <hr>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="coffee-span-3 hidden-column"></div>
          <div class="coffee-span-9 coffee-880-span-12">
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>