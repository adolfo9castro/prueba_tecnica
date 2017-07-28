<?php

$conexion = mysqli_connect("localhost","root","") 
	or die("Problemas en la conexion");

mysqli_select_db($conexion, "prueba_adolfo") 
	or die("Problemas en la seleccion de la base de datos");

mysqli_query($conexion, "delete from persona") 
	or die("Problemas en el select:".mysql_error());

mysqli_close($conexion);

?>