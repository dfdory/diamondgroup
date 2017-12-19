<?php
	session_start(); 
	include('../Url.php');
	
	$lang = $_SESSION['lang'];
	$url = new Url();
	$url_en =$url->get_en_url();
	$url_fr =$url->get_fr_url();
?>