<?php
	$mysqli = new mysqli('localhost', 'root', '', 'mi_revista');
	$mysqli -> set_charset("utf8");
	$queryCiudad = $mysqli -> query ("SELECT * FROM ciudad");
	$queryRevista = $mysqli -> query ("SELECT * FROM revista");

?>