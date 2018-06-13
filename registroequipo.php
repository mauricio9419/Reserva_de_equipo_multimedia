<?php
//llama al archivo donde esta la conexion a la base de datos
require_once ('conexion.php');

//se insertan los valores a la base de datos
$sql="insert into equipos
values
(null,'".$_POST["Nombre"]."','".$_POST["Marca"]."','".$_POST["Modelo"]."','".$_POST["serie"]."','Disponible')";
//echo "$sql";

//llama la clase de la conexion de la base de datos y ejecuta la sentencia que esta arriba
$res=mysql_query($sql,$conexion);

//muestra si se ha ingresado el registro correctamente y lo manda a la página index.
echo "<script type=''>
	alert('La reserva fue realizada correctamente');
	window.location='index.php';
</script>";
?>
?>
