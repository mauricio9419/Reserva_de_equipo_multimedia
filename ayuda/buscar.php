<?php 
// LLamamos el archivo de conexion a la base de datos
require_once ('conexion.php'); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Reserva de equipos</title>

<?php

//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$registros = '';

if($_POST){
      
  $busqueda = trim($_POST['buscar']);

  $entero = 0;
  
  if (empty($busqueda)){
        $texto = 'Búsqueda sin resultados';
  }else{
        
        //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
        $sql = "SELECT * FROM usuario WHERE carnet LIKE '%" .$busqueda. "%'";
        
        $resultado = mysql_query($sql); //Ejecución de la consulta
      //Si hay resultados...
        if ($row = mysql_fetch_array($resultado)){ 

            echo "<table border = '1'> \n"; 
            //Mostramos los nombres de las tablas 
            echo "<tr> \n"; 

             while($fila = mysql_fetch_assoc($resultado)){ 
                   }

            echo "</tr> \n"; 
            echo "<tr> \n"; 
            echo "<td>".$row["carnet"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["apellido"]."</td> \n"; 
            echo "<td>".$row["telefono"]."</td> \n"; 
            echo "<td><a href='mailto:".$row["email"]."'>".$row["email"]."</a></td> \n"; 
            echo "</tr> \n"; 

            echo "</table> \n"; 
        
        }else{
                     echo "NO HAY RESULTADOS EN LA BBDD";     
        }
  }
}
?>

</body>
</html>
