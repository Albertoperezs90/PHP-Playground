<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");

	//Para poder modificar variables estaticas, necesitamos hacerlo desde la propia clase generica
	//Compra_vehiculo::$ayuda=10000;

    //Al asignar la variable estatica como privada, necesitamos hacerlo desde un getter y setter
    Compra_vehiculo::descuentoGobierno();
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	$prueba = $compra_Ana->precio_final();

	echo "<br/> Hola $prueba"


?>
</body>
</html>