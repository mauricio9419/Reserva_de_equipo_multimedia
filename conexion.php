<?php


$conexion = mysql_connect("localhost", "root","") OR DIE("No ha sido posible conectar a la tabla");
mysql_select_db("mydb")OR DIE("No ha sido posible conectar a la Base de Datos");

//Convierto los acentos a HTML
function chao_tilde($entra)
{
$traduce=array( 'á' => '&aacute;' , 'é' => '&eacute;' , 'í' => '&iacute;' , 'ó' => '&oacute;' , 'ú' => '&uacute;' , 'ñ' => '&ntilde;' , 'Ñ' => '&Ntilde;' , 'ä' => '&auml;' , 'ë' => '&euml;' , 'ï' => '&iuml;' , 'ö' => '&ouml;' , 'ü' => '&uuml;');
$sale=strtr( $entra , $traduce );
return $sale;
}
?>
