<!DOCTYPE HTML>
<html>
	<head>
	<title>GameZone</title>
	</head>
		<body background ="fondo2.jpg">

		
				<h1 align="center" style="color:white">Proyecto X - Datos ingresados</h1>
						<nav><a href="index.html" style="color:red">Pagina Principal</a></nav>

			<fieldset>
			
			<?php
			
				$nombre = $_POST["nombre"];  echo "Su nombre es: $nombre <br> <hr></hr>"; 
				
				$apellido = $_POST["apellido"]; echo "su apellido es: $apellido <br> <hr></hr>";
				
				$telefono = $_POST["telefono"];	echo "su telefono es: $telefono <br> <hr></hr>";

				$AñoNacimiento = $_POST["nacido"]; 	echo "Su Año de Nacimiento es: $AñoNacimiento <br> <hr></hr>"; 

				$A = $_POST["A"]; echo "Su juego de terror seleccionado : $A <br> <hr></hr>"; 

				$B = $_POST["B"]; echo "su juego de accion seleccionado: $B <br> <hr></hr>";

				$C = $_POST["C"]; echo "su juego de aventura seleccionado:$C <br> <hr></hr>";

				$D = $_POST["D"]; echo "su juego de peleas seleccionado: $D <br> <hr></hr>";

				$E = $_POST["E"]; echo "su juego familiar seleccionado: $E <br> <hr></hr>";


					?>
			</fieldset>
		</BODY>
</HTML>
		
