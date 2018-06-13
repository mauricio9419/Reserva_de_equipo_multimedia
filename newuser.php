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
/*Este es el codigo del diseño del encabezado*/
  h2{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    color:#000000;
  }
  
  </style>
  <center>

    <h1>Registro de nuevos usuarios</h1>
    <h2>Por favor llene todos los campos</h2>

    <div class="group">
<form action="registro.php" method="POST">
  <h3><em>Formulario de Registro</em></h3>
  
     
      <label for="carnet">Carnet</label>
      <input type="text" name="carnet" class="form-input" required value="">


      <label for="fecha">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre" class="form-input" required value="">            

      <label for="fecha">Apellido <span><em>(requerido)</em></span></label>
      <input type="text" name="apellido" class="form-input" required value=""> 

      <label for="email">Email <span><em>(requerido)</em></span></label>
      <input type="email" name="email" class="form-input" required  />

      <label for="fecha">Telefono <span><em>(requerido)</em></span></label>
      <input type="text" name="telefono" class="form-input" required  value="">
<?php

//seleccionamos solo el nombre de los clientes
$sql=mysql_query("SELECT * FROM genero");

?>
<label for="genero">Genero <span><em>(requerido)</em></span></label>
<select name="genero" onchange="pedirDatos()" >
<?php
while($row = mysql_fetch_array($sql)){
  echo "<option value=\"".$row['genero']."\">".$row['genero']."</option> \n";
}
?>
</select> 
     <center> 
      <br>
      <input class="form-btn" name="submit" type="submit" value="Guardar" />

    </center>
    </p>
  </form>
</div>
<br><br><br>

    <a class="boton_personalizado" href="newreserva.php">Nueva Reservar</a>
    <a class="boton_personalizado" href="index.php">Regresar al inicio</a>

  </center>
</body>
</html>
