<?php
	require_once 'config.php';

	$db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName)
	OR die("Echec de la connexion: ".utf8_encode(mysqli_connect_error())."<br/>Num&eacute;ro d'erreur".utf8_encode(mysqli_connect_errno()));

	mysqli_set_charset($db,$dbcharset);
?>