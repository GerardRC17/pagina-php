<?php
$conexion=mysqli_connect("localhost","root","");
if (mysqli_connect_errno()){
echo"Fallo conexion a mysql".mysql_connect_error();
}
else{
echo "Se logro la conexion<br/>";
$consulta="CREATE  DATABASE registro";
if (mysqli_query($conexion,$consulta)){
echo"Base de datos creada!!!<br/>";
}
else{
echo"Error creando base de datos"
.mysqli_error($conexion)."<br/>";
}
}
?>