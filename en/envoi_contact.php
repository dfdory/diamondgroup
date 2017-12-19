<?php 
$nom=$_POST['nom'];
$phone=$_POST['phone'];
$add=$_POST['email'];
$objet=$_POST['objet'];
$message=$_POST['message'];

//$mail1='chaletbernadette@yahoo.com';
$mail='infos@diamondgroup.cm';
include("mail_contact.php");
header("Location:contact.php");

?>