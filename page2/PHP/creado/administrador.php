<?
session_start();
if (isset($_SESSION['valido']))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="uft-8"/>

	<title>Sitio administrador</title>
	</head>
	<body>
	<?php
	echo "<h1>Bienvenido</h1>
	<p>Hola".$_SESSION['nomUser']."</p>
	";
	?>
	</body>
	</html>
	<?php
}
	else{
	print "<p>No tienes permiso para ver este sitio </p>";
	}
	?>
	