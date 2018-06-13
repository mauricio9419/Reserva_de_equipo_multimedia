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


    <h1>Reservas realizadas</h1>

<br>
<br>
<div style="overflow-x:auto;">
<?php
//Ejecutamos la sentencia SQL
$result=mysql_query("select * from reserva inner join usuario where carnet=carnet1;");


?>
<table align="center">
<tr>
<th><h2>Carnet del Docente</h2></th>
<th><h2>Nombre</h2></th>
<th><h2>Apellido</h2></th>

<th><h2>Fecha de reserva</h2></th>
</tr>
<?php
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td align="center"><h3>'.$row["carnet"].'</h3></td>';
echo '<td align="center"><h3>'.$row["nombre"].'</h3></td>';
echo '<td align="center"><h3>'.$row["apellido"].'</h3></td>';

echo '<td align="center"><h3>'.$row["fecha"].'</h3></td></tr>';
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
