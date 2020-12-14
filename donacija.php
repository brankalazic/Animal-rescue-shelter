<!DOCTYPE html>

<?php
//prihvatanje podataka iz HTML forme

if(isset($_POST['cesto'])) {
	$cesto=$_POST['cesto'];
}

if(isset($_POST['sada'])) {
	$sada=$_POST['sada'];
}

if(isset($_POST['mesecno'])) {	
	$mesecno=$_POST['mesecno'];
}

if(isset($_POST['sest'])) {		
	$sest=$_POST['sest'];
}

if(isset($_POST['ime'])) {	
	$ime=$_POST['ime'];
}

if(isset($_POST['prezime'])) {	
	$prezime=$_POST['prezime'];
}

if(isset($_POST['adresa'])) {	
	$adresa=$_POST['adresa'];
}

if(isset($_POST['grad'])) {	
	$grad=$_POST['grad'];
}
	
if(isset($_POST['placanje'])) {	
	$placanje=$_POST['placanje'];
}

if(isset($_POST['kolicina'])) {	
	$kolicina=$_POST['kolicina'];
}

?>

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
				<a href="index.html#druga">O nama</a>
				<a href="adopt.html">Udomi</a>
				<a href="volonteer.html">Volontiraj</a>
				<a href="contact.html">Kontakti</a>
			</nav>	
		</div>
	</div>
	
		<div class="page" id="potvrda">
		
		<div class="potvrda-o-psu">

<?php

echo "<h1> Potvrda o donaciji: </h1> <br/>";

if($_POST['ime'] && $_POST['prezime'] &&
		 $_POST['adresa'] && $_POST['grad'] && $_POST['placanje'] != "") {
		
	echo "<b> Ime: </b> ", $ime, "<br/><br/>";
	echo "<b> Prezime: </b> ", $prezime, "<br/><br/>";
	echo "<b> Grad stanovanja: </b> ", $grad, "<br/><br/>";
	echo "<b> Adresa stanovanja: </b> ", $adresa, "<br/><br/>";
	echo "<b> Način plaćanja: </b> ", $placanje, "<br/><br/>";
	echo "<b> Vreme: </b>", date('H:i, jS F') , "<br/><br/>";
}

else {
	echo "<font color=\"red\"<b> Izostavili ste ključne podatke. </font></b><br/><br/>";
}

if(is_numeric($kolicina)) {
	echo "<br/> <b> Hvala Vam na donaciji! </b> <br/> <br/>";
	echo "<b> Donirali ste: </b> ", $kolicina, " RSD. <br/> <br/>"; 
}

elseif(empty($kolicina)) {
	echo "Niste ništa donirali.", $kolicina;
}

else {
	echo "Greška u unosu. Molimo Vas pokušajte ponovo. ";
}

?>

	</div>
	
	</div>
	</body>
</html>
