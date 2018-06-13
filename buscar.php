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

/*Color de fondo del body*/
body{
background:;
}
</style>


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
    color: 	#000000;
  }
  </style>
</head>
<body>

<?php


if($_POST){
      
  $busqueda = trim($_POST['buscar']);

  $entero = 0;
  
  $bus=$busqueda;
  if (empty($busqueda)){
        header('Location: newreserva.php');
  }else{
        
        //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
        $sql = "SELECT * FROM usuario WHERE carnet LIKE '%" .$busqueda. "%'";
        
        $resultado = mysql_query($sql); //Ejecución de la consulta
      //Si hay resultados...
        if ($row = mysql_fetch_array($resultado)){ 

            //si el registro existe en la base de datos lo envia por la url al archivo de reserva
            header('Location: reserva.php?car='.urlencode($bus));
            
        
        }else{
                     echo "<center><h1>NO HAY RESULTADOS EN LA BASE DE DATOS</h1></center>";
                     echo "<center><h2>¿Desea registrar este carnet?</h2></center>";
                     echo "<br>";
                      echo "<center><a class=\"boton_personalizado\" href=\"newuser.php\">Registrar Usuario</a>
                              <a class=\"boton_personalizado\" href=\"newreserva.php\">Nueva Busqueda</a></center>";    
        }
  }
}
?>


</body>
</html>
