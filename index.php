<?php 
	session_start();
	if(!isset($_SESSION['lang'])){
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			switch ($lang){
				case "fr":
					$_SESSION['lang'] = 'fr';
					break;
				case "en":
					$_SESSION['lang'] = 'en';
					break;        
				default:
					$_SESSION['lang'] = 'fr';
					break;
			}
	}
	$lang = $_SESSION['lang'];
	header('location:'.$lang);
?>
<H1>
	SCI 
<H1>