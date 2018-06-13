<?php
require_once ('conexion.php'); 

$sql="insert into reserva
values
(null,'".$_POST["fecha_ini"]."','".$_POST["horario"]."','".$_POST["equipos"]."','".$_POST["comentarios"]."','".$_POST["extencion"]."','".$_POST["regleta"]."','".$_POST["carnet"]."')";
//echo "$sql";
$res=mysql_query($sql,$conexion);
echo "<script type=''>
	alert('La reserva fue realizada correctamente');
	window.location='index.php';
</script>";
?>
?>

