<?php 

$texto = $_POST['texto1'];

// $encriptado = base64_encode($texto);

$encriptado = md5($texto); // MD5 no tiene reversa
// $encriptado = sha1($texto); // sha1 no tiene reversa

?>

<!DOCTYPE html>
<html>
<head>
	<title>Encriptar</title>
</head>
<body>

<h1><?php echo "Texto encriptado: ".$encriptado; ?></h1>

</body>
</html>