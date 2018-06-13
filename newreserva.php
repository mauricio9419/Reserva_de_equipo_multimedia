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
    color: #ffffff;
    background-color: #1C687F;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
</style>

<style type="text/css">
/*Este es el codigo del diseño del encabezado*/
  h2{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    color:;
  }

</style>

</head>
<body>
  <center>

    <h1>Sistema de reserva de equipo multimedia</h1>
    <h2>Por favor digite el numero de carnet del docente</h2>

 
<form id="buscador" name="buscador" method="post" action="buscar.php"> 
    <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
</form>

<br><br><br><br><br><br>
<a class="boton_personalizado" href="index.php">Regresar al inicio</a>

  </center>
</body>
</html>
