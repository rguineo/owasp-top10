<?php 

$texto = $_POST['texto2'];

$desencriptado = base64_decode($texto);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Desencriptar</title>
</head>
<body>

<h1><?php echo "Texto desencriptado: ".$desencriptado; ?></h1>

</body>
</html>