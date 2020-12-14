<?php
	$ime = $_POST['ime'];
	$email = $_POST['email'];
	$poruka = $_POST['poruka'];
	
	$email_from = 'brankala28@gmail.com';
	
	$email_subject = 'Prihvatilište za pse';
	
	$email_body = "Ime:  $ime.\n".
				  "E-mail adresa: $email.\n".
				  "Poruka: $poruka.\n";
				  
	$email_to = 'branka.lazic.17@singimail.rs';
	
	$headers = 'Od: $email_from \r\n';
	
	$headers = 'Odgovori: $email \r\n';
	
	mail($email_to,$email_subject,$email_body,$headers);
	
	header("Lokacija: contact.php");
?>