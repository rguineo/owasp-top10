<?php 
header( "Set-Cookie: name=value; httpOnly" );
?>


<!DOCTYPE html>
<html>
<head>
	<title>SLQ Injection</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="icon" type="image/png"  href="img/favicon.png">
</head>

<body>

<div class="cabecera">
	<img class="logo" src="img/owasp-logo.jpg">
</div>


<h2>OWASP (Open Web Application Security Project) - TOP 10</h2>
<hr>
<h1>Ingrese Credenciales</h1>

<!-- SELECT * FROM usuarios WHERE usuario = '' or '1' = '1' and clave = '' or '1' = '1' -->

<form method="post" action="validar.php">

	<label for="usuario">Usuario:</label>	

	<input type="text" name="usuario">
	<br><br>
	
	<label for="password">Password:</label>

	<input type="password" name="password" ><br><br>
	<input type="submit" name="enviar">

</form>

<hr>
<br>
<!-- <h1>Encriptar texto</h1>
<form method="post" action="encriptar.php">

	<label for="usuario">Texto</label>	
	<input type="text" name="texto1" required>
	<br><br>
	<input type="submit" name="enviar"> 

</form>


<br><br>
<hr>
<h1>Desencriptar texto</h1>
<br>
<form method="post" action="desencriptar.php">

	<label for="usuario">Texto</label>	
	<input type="text" name="texto2" required>
	<br><br>
	<input type="submit" name="enviar">

</form>
<br><br><hr>
<div class="top-ten">
	<img class="top-10" src="img/top-10.jpg">
</div>

<script>
	console.log('Nuevo ejemplo de vista por consola ...')
</script>
-->
</body>
</html>