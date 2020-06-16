<?php
session_start();
if (isset($_SESSION['valido']))
{
	?>
	<DOCTYPE html>
	<html>
	 <head>
	 	<link rel="stylesheet" type="text/css" href="../CSS/adm.css">
	    <meta charset="uft-8"/>

	     <title>Sitio administrador</title>
	
	</head>
	<body>
		

         <h1>Bienvenido</h1>
		<header>
			
			<a href="../cerrar.php" id="close">Cerrar sesion</a>
			
		</header>
   <div id="principal">
   	<li><a href ="tabla.php">Tabla de Registros</a></li>
			<section>

	
	

	<h2></h2>

	<h3>Hola Administradores</h3>
	
	<ul>
		
	<img src="../../imagen/ima8.jpg" width="1920" height="1200" alt=""/>
		
	</ul>
	</section>
    </div>
   
	</body>
	</html>
	<?php
	}
	else{
	print "<p>No tienes permiso para ver este sitio </p>";
	}
	?>
