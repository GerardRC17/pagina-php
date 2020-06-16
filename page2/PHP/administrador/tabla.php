<DOCTYPE html>
<html>
<head>

    <title>Contacto</title>
    <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../CSS/tabla.css"/>
        
</head> 
<header>
      
      <h1> Tabla de registros <h1/>
        <h2 ></h2>
      
    </header>
     <sidebar>
      <img src="../../imagen/ima4.jpg" width="1920" height="1200" align="right" alt=""/> 
      </sidebar>
<body>
  <?php
     require "../conexion.php";
     $tabla="SELECT * FROM reservaciones";
     $imprime=mysqli_query($conecta,$tabla);

     echo "<table>";
     echo "<tr><th>Email</th><th>Nombre</th><th>Apellido</th><th>Fecha</th><th>Arrastrada</th></tr>";
     while($d=mysqli_fetch_array($imprime,MYSQLI_NUM)){
        echo "<tr>
        <form name='usuarios' action='' method='post'/>
        <input type='hidden' name='clave' value='".$d[0]."'/>
        <td><input type='text' name='correo' value='".$d[0]."'/></td>
        <td><input type='text' name='nom' value='".$d[1]."'/></td>
        <td><input type='text' name='apell' value='".$d[2]."'/></td>
        <td><input type='text' name='fech' value='".$d[3]."'/></td>
        <td><input type='text' name='arras' value='".$d[4]."'/></td>
        <td><input type='submit' name='borrar' value='Borrar'/></td>
        <td><input type='submit' name='actualizar' value='Actualizar'/></td>
        </form>
        </tr>";
       }
     echo "</table>";
     ?>

<a type="back" class="boton" href="administrador.php">Regresar</a>
</div>
     
</body>
</html>
<?php
  if(isset($_POST['borrar'])){
   $user=$_POST['clave'];
   $borra="DELETE FROM reservaciones WHERE Email='$user'";
   if(mysqli_query($conecta,$borra)){
     echo "<script>
         alert('Registro Borrado');
         location.href='tabla.php';
         </script>";
    }
   else{
     echo "<script>
         alert('Fallo Borrado');
         location.href='tabla.php';
         </script>";
   }
  }
  if(isset($_POST['actualizar'])){
  $nom=$_POST['correo'];
  $pas=$_POST['nom'];
  $pass=$_POST['apell'];
  $correo=$_POST['fech'];
  $ocup=$_POST['arras'];
  $actu="UPDATE reservaciones SET Nombre='$pas',Apellido='$pass',FechaN='$correo',Arrastrada='$ocup' WHERE Email='$nom'";
   if(mysqli_query($conecta,$actu)){
     echo "<script>
         alert('Registro Actualizado');
         location.href='tabla.php';
         </script>";
    }
   else{
     echo "<script>
         alert('Fallo Actualizacion');
         location.href='tabla.php';
         </script>";
   }
  }
?>