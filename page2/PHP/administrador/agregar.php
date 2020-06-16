<?php
    require "../conexion.php";
     $n=$_POST['nombre'];
     $e=$_POST['apellido'];
     $c=$_POST['email'];
     $a=$_POST['fecha'];
     $s=$_POST['arrastrada'];
    #print_r($_POST);
    $revisa="SELECT COUNT(*) FROM  reservaciones WHERE email='$c'";
    $registro=mysqli_query($conecta,$revisa);
    $dato=mysqli_fetch_array($registro,MYSQLI_NUM);
    if($dato[0]==1){
    	echo "Ya existe ese registro";
    }
    else{
     $inserta="INSERT INTO reservaciones (Nombre,Apellido,
   Email,FechaN,Arrastrada) VALUES ('$n','$e','$c','$a','$s')";
      #$consulta=mysqli_query($conecta,$inserta);
      if(mysqli_query($conecta,$inserta))
      	echo "Se insert&oacute; registro";
      else
      	echo "No se insert&oacute; registro";
   }
    #print_r($_POST);
      echo "<br/><br/><a href='http://localhost/page2/titulo.html'>Regresa</a>";
 ?>
              