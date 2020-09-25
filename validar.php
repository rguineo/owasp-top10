<?php 

error_reporting(0);

// conexion a Base de Datos
include 'conexion.php';

// credenciales
// $usuario = $_POST['usuario'];
// $password = $_POST['password'];


//Cookie
//setcookie("name", "John Watkin", time()+3600, "/","", 0); 
//setcookie("age", "36", time()+3600, "/", "", 0);

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// $usuario = $_GET['usuario'];
// $password = $_GET['password'];

// Se usa mysqli_real_escape_string para evitar los caracteres especiales 
// $_usuario = mysqli_real_escape_string($conexion, $usuario);
// $_password = mysqli_real_escape_string($conexion, $password);

$sql = "SELECT *
		FROM usuarios 
		WHERE usuario = '$usuario' and clave = '$password'";

echo $sql;

	$resultado = mysqli_query($conexion, $sql) or die('Error en la consulta de Login');;

	if('1' == mysqli_num_rows($resultado)){
		$linea = mysqli_fetch_assoc($resultado);
		$nombre = $linea['nombre'];
		$apellido = $linea['apellido'];
		$user = $linea['usuario'];
		$clave = $linea['clave'];
		$rol = $linea['rol'];
		$alerta = "Datos recolectados ";
	} else {
		$alerta = " No hay datos ";
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Validar Login</title>
	<link rel="icon" type="image/png"  href="img/favicon.png">
</head>
<body>

<h2>Validación de Login</h2>
<hr>
<p> Usuario: <?php echo $user; ?></p>
<p> Password: <?php echo $clave; ?></p>
<p> Nombre: <?php echo $nombre; ?></p>
<p> Apellido: <?php echo $apellido; ?> </p>
<p> Rol: <?php echo $rol; ?></p>
<p> Alerta: <?php echo $alerta; ?></p>
<hr>

<a class="btn" href="index.php" type="button"> Volver index</a>

<br><br>

<!-- Uso de Cookie-->
<!-- <div>
	
	<?php 
         echo $_COOKIE["name"]. "<br />";
         /* is equivalent to */
         echo $HTTP_COOKIE_VARS["name"]. "<br />";
         echo $_COOKIE["age"] . "<br />";
         /* is equivalent to */
         echo $HTTP_COOKIE_VARS["name"] . "<br />";
	 ?>
</div> -->


<style type="text/css">
	a:link {
		text-decoration:none;
	}

	.btn {

		background-color: orange;
		color: white;
		padding-right: 15px;
		padding-left: 15px;
		padding-top: 5px;
		padding-bottom: 5px;

		-webkit-box-shadow: 5px 5px 2px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 5px 5px 2px 0px rgba(0,0,0,0.75);
		box-shadow: 5px 5px 2px 0px rgba(0,0,0,0.75);
	}

</style>


</body>
</html>