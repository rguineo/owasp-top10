<!DOCTYPE html>
<html>
<head>
	<title>Cross Site Scripting</title>
</head>
<body>
<?php 
	// <script>alert('Hola Mundo')</script>
	echo "<h1>".$_GET['parametro']."</h1>";
 ?>
</body>
</html>