<?php
	//url host, usuario, contraseña, nombre bd
	$host = 'localhost';
	$user = 'root';
	$pw = '';
	$db = 'mi_revista';
	$mysqli = new mysqli($host, $user, $pw, $db);
	$mysqli->set_charset("utf8");
	
	$query = $mysqli -> query ("SELECT * FROM ciudad");  
	$query2 = $mysqli -> query ("SELECT * FROM revista"); 
?>