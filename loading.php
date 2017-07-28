<?php
$_id = 0000;
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

$conexion = mysqli_connect("localhost","root","") 
	or die("Problemas en la conexion");

mysqli_select_db($conexion,"prueba_adolfo") 
	or die("Problemas en la seleccion de la base de datos");

mysqli_query($conexion, "insert into persona values ('".$_id."','".$cedula."','".$nombre."','".$apellido."')")
	or die("Problemas en el select ".mysqli_error());

$result = mysqli_query($conexion, "SELECT MAX(id) FROM persona");
$row = mysqli_fetch_row($result);
$_id = $row[0];

mysqli_close($conexion);

echo "<div id='_id' class='col-3' >" . $_id . "</div>"; 
echo "<div id='cedula' class='col-3'>" . $cedula . "</div>";
echo "<div id='nombre' class='col-3 '>" . $nombre. "</div>" ;
echo "<div id='apellido' class='col-3'>" . $apellido . "</div>";

?>
