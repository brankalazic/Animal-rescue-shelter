<!DOCTYPE html>

<?php
//prihvatanje podataka iz HTML forme

$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$odabir=$_POST['odabir'];
$imepsa=$_POST['imepsa'];

?>

<html>
	<head>
		<title> Branka Lazic </title>
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
		
	<div class="page" id="potvrda">
		
		<div class="potvrda-o-psu">

<?php

echo "<h1> Potvrda o udomljavanju: </h1> <br/>";

if(isset($_POST['imepsa']) && $_POST['imepsa'] != "") {
	
	echo "<b> Ime: </b> ", $ime, "<br/>";
	echo "<b> Prezime: </b> ", $prezime, "<br/>";
	echo "<b> Odabrao/la si: </b> ", $odabir, "<br/>";
	echo "<b> Njegovo/njeno ime je: </b> ", $imepsa, "<br/>";
	echo "<b> Vreme: </b>", date('H:i, jS F');
	
}

else {
	echo "<font color=\"red\"<b> Niste odabrali nijedno ime. </font></b>";
}
?>

		</div>
	</div>	
</body>
</html>
