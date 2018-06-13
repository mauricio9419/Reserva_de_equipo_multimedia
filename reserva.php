<?php 
// LLamamos el archivo de conexion a la base de dato
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
  h1{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    color:#FFFFFF;
  }

</style>
<style type="text/css">
/*Este es el codigo del diseño del encabezado*/
  h2{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    color:black;
  }

</style>
<?php

//obtenemos el dato del carnet y es ingresado a la base de datos 
$car=$_GET["car"];
?>
  <center>

    <h1>Registro para nueva reserva de equipo</h1>
    <h2>Por favor rellene todas las casillas del siguiente formulario</h2>

<div class="group">
<form action="registroreserva.php" method="POST">
  <h3><em>Formulario de Registro</em></h3>
  
     
      <label for="nombre">Carnet</label>
      <input type="text" name="carnet" class="form-input" required value="<?php echo $car;?>">


      <label for="fecha">Fecha <span><em>(requerido)</em></span></label>
      <input type="date" name="fecha_ini" class="form-input" required step="1" min="2018-01-01" max="2018-12-31" value="<?php echo date("d-m-Y");?>" required >            

<?php

//seleccionamos solo el nombre de los clientes
$sql=mysql_query("SELECT * FROM horario");

?>
<label for="horario">Horario <span><em>(requerido)</em></span></label>
<select name="horario" onchange="pedirDatos()" >
<?php
while($row = mysql_fetch_array($sql)){
  echo chao_tilde("<option value=\"".$row['horario']."\">".$row['horario']."</option> \n");
}
?>
</select> 
<br>
<br>

<?php

//seleccionamos solo el nombre de los clientes
$sql=mysql_query("SELECT * FROM equipos where estado_equipo='Disponible';");

?>
<label for="equipos">Equipo <span><em>(requerido)</em></span></label>
<select name="equipos" onchange="pedirDatos()" >
<?php
while($row = mysql_fetch_array($sql)){
  echo chao_tilde("<option value=\"".$row['nombre']."\">".$row['nombre']."</option> \n");
}
?>
</select> 
<br>
<br>

      <label for="e_reserva">Comentario <span><em>(requerido)</em></span></label>
      <input type ="comentarios" rows="10" cols="40" class="form-input" required  />  


      <label for="extencion">Extencion Electrica <span><em>(requerido)</em></span></label>
      <input type="text" name="extencion" class="form-input" required  />

      <label for="regleta">Regleta Electrica <span><em>(requerido)</em></span></label>
      <input type="text" name="regleta" class="form-input" required  />

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
