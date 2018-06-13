<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$admin = $sesion->get("admin");
	
	if( $admin == false )
	{	
		header("Location: login.php");		
	}
	else 
	{
	?>
	<HTML><head>
	<title></title>
	</head>
	<body>
	<h1>Hola:  <?php echo $sesion->get("admin"); ?> </h1> <a href="cerrarsesion.php"> <div><input type="submit" name ="Cerrar Sesion" value="Cerrar Sesion"/></div> </a>
	
	
  <center>

<style type="text/css">

/*Color de fondo del body*/
body{
background:;
}
</style>

<style type="text/css">

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
    font-weight: 300;
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
    color: #ffffff;
  }

</style>

	
	
	
	</body>
	</HTML>
	
	<?php 
	}	
?>
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
  }
</style>

<style type="text/css">
/*Este es el codigo del diseño del encabezado*/
  h2{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    color: 	#000000;
  }

</style>


</head>
<body>
  <center>

    <img src="IMG/bienvenido.png" alt="Bienvenidos" align="top">
    <h1>Al sistema de reserva de equipo multimedia</h1>
    <h2>Por favor seleccione una opción</h2>

    <a class="boton_personalizado" href="newreserva.php">Nueva Reservar</a>
    <a class="boton_personalizado" href="consulta.php">Consultas reservas</a>
    <a class="boton_personalizado" href="disponibles.php">Equipos disponibles</a>
    <a class="boton_personalizado" href="newequipo.php">Nuevos Equipos</a>

  </center>
</body>
</html>
