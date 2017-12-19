<?php
$hostname_dbprotect = "mysql46int.237hosting.cm"; // nom du serveur
$database_dbprotect = "db1003896_diamondgroup"; // nom de la base de données
$username_dbprotect = "u1003896_admindg"; // nom d'utilisateur
$password_dbprotect = "4hidmro*0-"; // mot de passe
$dbprotect = mysql_pconnect($hostname_dbprotect, $username_dbprotect, $password_dbprotect) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_connect($hostname_dbprotect,$username_dbprotect,$password_dbprotect);

mysql_select_db($database_dbprotect);
?>
