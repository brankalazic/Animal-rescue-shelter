<!DOCTYPE html>

<html>
	<head>
		<title> Branka Lazic </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="main.css">
	</head>

	<body>
	
	<div class="header">
		<div id="logo-i-menu">
			<nav id="main-menu">
				<a href="index.html">Početna</a>
				<a href="#druga">O nama</a>
				<a href="adopt.html">Udomi</a>
				<a href="volonteer.html">Volontiraj</a>
				<a href="contact.html">Kontakti</a>
			</nav>	
		</div>
	</div>
	
	<div class="page" id="niz">
		
	<div class="potvrda-o-nizu">
	
<?php
 
echo "<h1> BMI </h1> <br/>";

$height=0;  
$width=0;  
  
$height=$_POST['height'];  
$weight=$_POST['weight'];  

@$bmi=$weight / ($height * $height);  

if(isset($_POST['height']) && $_POST['weight'] != "") {
	
	echo "<br/>";
	print("Indeks telesne mase je: $bmi"); 
	echo "<br/><br/>";
}

else {
	echo "<font color=\"red\"<b> Niste popunili polja. Molimo Vas učinite to. </font></b>";
}


echo "<br/><br/><br/>";
echo "<h1> Neki podaci o rasnim psima: </h1> <br/>";

class Pas {
  public $comp;
  public $color = 'bela';
  
  public function boravak() {
    return "kućni pas";
  }
}

$samojed = new Pas ();
$canecorso = new Pas ();

$canecorso -> color = 'crna';
$samojed -> comp = "20-30kg";
$canecorso -> comp = "62-72cm";

echo "<hr />";
echo "<b>Karakteristična boja za samojeda je: </b> ", $samojed -> color, "<br/> "; 
echo "<br />";
echo "<b> Karakteristična boja za cane corso je: </b>", $canecorso -> color , "<br/> "; 
echo "<br />";
echo "<b> Prosečna težina odraslog samojeda: </b> ", $samojed -> comp, "<br/> ";
echo "<br />";
echo "<b>Prosečna visina odraslog cane corso: </b> ", $canecorso -> comp , "<br/> "; 
echo "<hr />";
echo "<b> Samojed je: ", $samojed -> boravak();
echo "<hr />";

?>

	</div>
	
	</div>


</body>