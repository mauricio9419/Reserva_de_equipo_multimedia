<?php
	require_once("sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$admin = $_POST["admin"];
		$password = $_POST["contrasenia"];
		
		if(validarUsuario($admin,$password) == true)
		{			
			$sesion->set("admin",$admin);
			
			header("location: index.php");
		}
		else 
		{
			echo "Verifica tu nombre de usuario y contrase�a";
		}
	}
	
	function validarUsuario($admin, $password)
	{
		$conexion = new mysqli("localhost","root","","mydb");
		$consulta = "select contrasenia from admin where nick = '$admin';";
		
		$result = $conexion->query($consulta);
		
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["contrasenia"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
	}

?>

<html>
<head>
<title></title>
</head>
<html>
<head>
<title></title>
</head>

<body>
	
	 <center>

<style type="text/css">
{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  font-family:arial;
}
</style>
<style type="text/css">
body{background:#F0FFFF}
h1{
  color:#AAA173;
  text-align:center;
  font-faimly:icon;
}
</style>

<body>
	<IMG SRC="IMG/institucion.gif" WIDTH=178 HEIGHT=180 ALT="Logo de la institucion educativa">
	<h1>Bienvenido al sistema reserva de equipo multimedia</h1>
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">



  
   <div>
	  <style>
	label{
    color: #666;
    font-weight: bold
}

</style>
		  
   <div> <label>Usuario: </label> <input type="text" name="admin" placeholder="Ingrese su usuario"></p> </div><br>
    <div><label>Contraseña: </label> <input type="text" name="contrasenia" placeholder="Ingrese su password"></p></div><br>
    <div><input type="submit" name ="iniciar" value="Iniciar Sesion"/></div>
    
  
 
 
  
  </div>
</form>
</body>
</html>
