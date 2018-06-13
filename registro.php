<?php

require_once ('conexion.php'); 

$sql="insert into usuario
values
('".$_POST["carnet"]."','".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["email"]."','".$_POST["telefono"]."','".$_POST["genero"]."')";
//echo "$sql";
$res=mysql_query($sql,$conexion);
echo "<script type=''>
	alert('El usuario fue ingresado correctamente');
	window.location='index.php';
</script>";
?>
?>
