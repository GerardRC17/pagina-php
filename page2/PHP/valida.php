<?php
$nom=$_POST['nombre'];
$n=$_POST['contra'];
require "conexion.php";
$c="SELECT Email,Nombre FROM reservaciones WHERE Email='$nom' and Nombre='$n'";

$d=mysqli_query ($conecta,$c);
$reg=mysqli_fetch_array($d, MYSQLI_NUM);

mysqli_close($conecta);

if ($reg[0]==$nom&&$reg[1]==$n){
	if ($reg[0] =="admin" &&$reg[1]==0){
    session_start();
	$_SESSION ['nomUser']=$reg[0];
	$_SESSION ['valido']=true;
	header("location:administrador/administrador.php");
	}
	else{
	session_start();
	$_SESSION ['nomUser']=$reg[0];
	$_SESSION ['']=$reg[1];
	$_SESSION ['valido']=true;
	header("location:Clientes/inscripcion.php");
}
}
?>