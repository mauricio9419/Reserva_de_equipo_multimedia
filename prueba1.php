
<?php 
// LLamamos el archivo de conexion a la base de datos
require_once ('conexion.php'); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Reserva de equipos</title>
</head>
<body>

	 <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
    <tr> 
      <td width='150' style='font-weight: bold'>ID</td> 
      <td width='150' style='font-weight: bold'>NOMBRE</td> 
      <td width='150' style='font-weight: bold'>MARCA</td> 
      <td width='150' style='font-weight: bold'>MODELO</td>
      <td width='150' style='font-weight: bold'>SERIE</td>  
    </tr> 
<?php 

    $query = "select * from equipos";     // Esta linea hace la consulta a la base de datos
    $result = mysql_query($query); 
//Creamos un while y creamos una nueva varialble llamada registro que sera igual al resultado de la consulta
    while ($registro = mysql_fetch_array($result)){ 
echo
// Imprimimos en pantalla los datos de la base de datos
 " 
    <tr> 
      <td width='150'>".$registro['idequipo']."</td> 
      <td width='150'>".$registro['nombre_equipo']."</td> 
      <td width='150'>".$registro['marca']."</td> 
      <td width='150'>".$registro['modelo']."</td> 
      <td width='150'>".$registro['serie']."</td> 

    </tr> 
"; 
} 
 
?> 
   </table>

</body>
</html>
