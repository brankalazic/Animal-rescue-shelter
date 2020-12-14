<!DOCTYPE html>

<?php
//prihvatanje podataka iz HTML forme

$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$godina=$_POST['godina'];
$status=$_POST['status'];

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

echo "<h1> Potvrda o volontiranju: </h1> <br/>";

if(isset($_POST['status']) && $_POST['ime'] && $_POST['prezime'] != "") {
	
	echo "<b> Ime: </b> ", $ime, "<br/>";
	echo "<b> Prezime: </b> ", $prezime, "<br/>";
	echo "<b> Godina rođenja: </b> ", $godina, "<br/>";
	echo "<b> Tvoj radni status: </b> ", $status, "<br/>";
	echo "<b> Vreme: </b>", date('H:i, jS F');
	
}

else {
	echo "<font color=\"red\"<b> Izostavili ste ključne podatke. </font></b>";
}
?>

	</div>
	
	</div>
	</body>

