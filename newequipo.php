<?php 
// LLamamos el archivo de conexion a la base de datos
require_once ('conexion.php'); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Reserva de equipos</title>

<link href="estilos.css" rel="stylesheet" type="text/css">

</head>
<body>
	<style type="text/css">
/*Color de fondo del body*/
body{
background:#FFFFFF;
}
</style>
<style type="text/css">
 h2{
   
 
   
    color: #000000;
   
  }
  </style>
  <center>

    <h1>Registro para nuevo equipo</h1>
    <h2>Por favor rellene todas las casillas del siguiente formulario</h2>

<div class="group">
<form action="registroequipo.php" method="POST">
  <h3><em>Formulario de Registro</em></h3>
  
<?php

//seleccionamos solo el nombre de los clientes
$sql=mysql_query("SELECT * FROM equipos where estado_equipo='Disponible';");

?>

      <label for="Nombre">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="Nombre" class="form-input"required >


      <label for="Marca">Marca <span><em>(requerido)</em></span></label>
      <input type="text" name="Marca" class="form-input"required />

      <label for="Modelo">Modelo <span><em>(requerido)</em></span></label>
      <input type="text" name="Modelo" class="form-input"required  />

      <label for="serie">Serie <span><em>(requerido)</em></span></label>
      <input type="text" name="serie" class="form-input" required />

<br>
<br>

     <center> 
      <input class="form-btn" name="submit" type="submit" value="Guardar" />

    </center>
    </p>
  </form>
</div>
<br>
<br>
    <a class="boton_personalizado" href="index.php">Regresar al menu inicio</a>
    <a class="boton_personalizado" href="newreserva.php">Realizar nuevo busqueda</a>
<br>
<br>
  </center>
</body>
</html>
