<?php

$conexion = mysqli_connect("localhost","root","") 
	or die("Problemas en la conexion");

mysqli_select_db($conexion,"prueba_adolfo") 
	or die("Problemas en la seleccion de la base de datos");

$mostrar = mysqli_query($conexion, "select * from persona") 
	or die("Problemas en el select: ".mysql_error());

while ($llamado = mysqli_fetch_array($mostrar))
{
  echo "<div id='_id' class='col-3'>" . $llamado['id'] . "</div>"; 
  echo "<div id='cedula' class='col-3'>" . $llamado['cedula'] . "</div>";
  echo "<div id='nombre' class='col-3'>" . $llamado['nombre'] . "</div>";
  echo "<div id='apellido'class='col-3'>" . $llamado['apellidos'] . "</div>";

}
mysqli_close($conexion);

?>
