<?php
session_start();
	$User = $_SESSION['userdatas'];
	print_r($User);
	$_SESSION["movetofirst"] = true;
	if($_SESSION['isloggedin'] != true ){
		header("Location: /ujszovegesdokumentumlogin.php");
	}
	else if($User["Munka"] != null && $User["Suli"] != null && $User["TeljesNev"] != null){
		
		header("Location: /ujprojekt/index.php");
	}
	
	

	
		
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Új Szöveges Dokumentum</title>
  <script>document.createElement( "picture" );</script>
  <link rel="stylesheet" href="ujszovegesdokumentum.css"/>
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

    <div>
    <article class="coffee-880-span-8 coffee-549-span-12 coffee-700-span-12">
      <h2 class="heading-11">Kérjük add meg az adataid</h2>
        <div class="rule rule-11">
		<form id="form-id" method="POST">
		<span id="teljesnev">Teljes Neved:</span> <br>
		<input type="text" name="nev" id="nev-id"><br>
		<span id="suli">Legmagasabb végzettséged:</span><br> 
		<input type="text" name="suli" id="suli-id"><br>
		<span id="munka">Jelenlegi munkahelyed</span> <br>
		<input type="text" name="munka" id="munka-id"><br>
		<input type="submit" name="submit">
		</form>
		<a class="fooldallink" href="ujbejelentkezestelenorzodokumentum.php">Ez most kihagyom tovább főoldalra</a>
          <hr>
        </div>
		 </article>
      </div>
   
  </main>
  <div class="row full-width-row footer">
    <div class="coffee-span-12">
      <footer class="subgrid">
        <div class="row">
          <div class="coffee-span-3 hidden-column"></div>
          <div class="coffee-span-9 coffee-880-span-12">
            <a class="link-text footer-nav" href="/ujprojekt/ujkijelentekzodokumentum.php">Kijelentkezés</a>
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
<?php
function UpdateDB()
	{
		$User = $_SESSION['userdatas'];
		$teljesNev = $_POST['nev'];
		$suli = $_POST['suli'];
		$munka = $_POST['munka'];
		echo $teljesNev;
		echo $suli;
		echo $munka;
		print_r($User);
		if(isset($teljesNev)&&isset($suli)&&isset($munka))
		{
			print($teljesNev);
			
			$servername = "localhost";
			$username = "root";
			$dbname = "ujadatbazisdokumentum";
			
			$conn = new mysqli($servername, $username, "", $dbname);
			
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			print($teljesNev);
			$usernamef = $User['username'];
			$User['TeljesNev'] =$teljesNev;
			$User['Suli']=$suli;
			$User['Munka']=$munka;
			$sql = "UPDATE ujtabladokumentum SET TeljesNev='$teljesNev',Suli='$suli',Munka='$munka' WHERE (username='$usernamef');";
			print($sql);
			$conn->query($sql);
			$_SESSION['userdatas'] = $User;
			
		}
	}

if(isset($_POST['submit'])){
	UpdateDB();
	header("Location: /ujprojekt/index.php");
}
?>