<?php
$conexion=mysqli_connect("localhost","root","","registro");
if (mysqli_connect_errno()){
echo"Fallo conexion a mysql".mysql_connect_error();
}
else{
echo "Se logro la conexion<br/>";
$tabla="CREATE TABLE reservaciones (Email varchar(50) primary key not null,Nombre varchar(50) not null, Apellido  varchar(50) not null,FechaN varchar(50) not null,Arrastrada varchar(50) not null)";
if (mysqli_query($conexion,$tabla)){
echo"Tabla Creada!!!<br/>";
}
else{
echo"Error no se Creo la Tabla"
.mysqli_error($conexion)."<br/>";
}
}
mysqli_close($conexion);
?>