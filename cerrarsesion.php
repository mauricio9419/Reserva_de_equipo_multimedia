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
		$admin = $sesion->get("admin");	
		$sesion->termina_sesion();	
		header("location: login.php");
	}
?>
