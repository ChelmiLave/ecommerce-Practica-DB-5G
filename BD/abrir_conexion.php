<?php

	$host ="lhuna.dev";
	$basededatos ="upen_equipo";
	$usuario ="upen_equipo";
	$clavedb ="dNqyIvM2Jb3gEtlN";

	$tabla_db1 = "clientes";

	$conexion = new mysqli($host,$usuario,$clavedb,$basededatos);

	if ($conexion->connect_errno) {
		echo "Nuestro sitio experimenta fallos....";
		exit();
	}


 ?>