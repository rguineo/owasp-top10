<?php
	
	// Ingrese los datos de su base de datos

	$nombre_base_de_datos = "owasp_2020"; //Nombre de la base de datos
	$usuario_db = "root"; // usuario base de datos, generalmente es root
	$password_usr_db = ""; // password del usuariode la base de datos, generalmente en XAMPP es sin password



	$conexion = mysqli_connect("localhost", $usuario_db, $password_usr_db, $nombre_base_de_datos);

	if (mysqli_connect_errno())
	  {
	  	echo "Falla al conectar a MySQL: " . mysqli_connect_error();
	  }
	mysqli_set_charset($conexion, "utf8");
?>