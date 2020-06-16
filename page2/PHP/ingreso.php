<!DOCTYPE html>
<html>
 <head>
   <title>Formulario</title>
   <link rel="stylesheet" href="CSS/formulario.css" type="text/css"/>
 </head>
 <body>
 	<header>
			
			<h1>Iniciar Sesion Solo Administradores</h1>
			
		</header>
 	<section>
    <form name="datos" action="valida.php" method="post" >
	  <label for="nombre">Nombre:</label>
	  <div class="re">
	     <input type="text" name="nombre" id="nombre" class="texto"/></div><br/>
	  <label for="c">Contrase&ntilde;a:</label>
	  <div class="re">
        <input type="password" name="contra" id="c" class="texto"/>
	   
	   </div>
	   <br/>
	   <br/>
	   <input type="submit" value="Ingresar" class="boton"/>
	   <input type="reset" value="Borrar" class="boton"/>
	   <a type="back" class="boton" href="../titulo.html">Regresar</a>
	   </section>
	   	   <sidebar>
	   	<img src="../imagen/ima5.jpg" width="1167" height="1200" align="right"alt=""/>
	   </sidebar>
    </form>

 </body>
</html>