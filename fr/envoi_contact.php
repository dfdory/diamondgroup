<?php 
$nom=$_POST['nom'];
$add=$_POST['email'];
$phone=$_POST['phone'];
$objet=$_POST['objet'];
$message=$_POST['message'];

//$mail1='chaletbernadette@yahoo.com';
$mail='infos@diamondgroup.cm';
include("mail_contact.php");
header("Location:contact.php");

?>