<?php 
// LLamamos el archivo de conexion a la base de datos
require_once ('conexion.php'); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Reserva de equipos</title>





<style type="text/css">
/*Este es el codigo del diseño de los botones*/
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1C687F;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
</style>
<style type="text/css">
/*Este es el codigo del diseño del encabezado*/
  h1{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    color: #;
  }
</style>

<style type="text/css">
/*Este es el codigo del diseño del encabezado*/
  h2{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    color: #ffffff;
  }

  th{
    background-color: #4CAF50;
    color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>


</head>
<body>
  <center>


    <h1>Equipos disponibles</h1>

<br>
<br>
<div style="overflow-x:auto;">
<?php
//Ejecutamos la sentencia SQL
$result=mysql_query("SELECT * FROM equipos where estado_equipo='Disponible';");
?>
<table align="center">
<tr>
<th><h2>Estado del equipo</h2></th>
<th><h2>Nombre del equipo</h2></th>
<th><h2>Marca del equipo</h2></th>
<th><h2>Modelo del equipo</h2></th>
</tr>
<?php
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td align="center"><h3>'.$row["estado_equipo"].'</h3></td>';
echo '<td align="center"><h3>'.$row["nombre"].'</h3></td>';
echo '<td align="center"><h3>'.$row["marca"].'</h3></td>';
echo '<td align="center"><h3>'.$row["modelo"].'</h3></td></tr>';
}
mysql_free_result($result)
?>
</table>
<br>
<br>

</div>

    <a class="boton_personalizado" href="newreserva.php">Nueva Reservar</a>
    <a class="boton_personalizado" href="index.php">Regresar al inicio</a>

  </center>
</body>
</html>
