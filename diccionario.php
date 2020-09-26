<?php 

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

$ar = fopen("diccionario.txt", "a") or die ("Error al crear");

for ($i = 0; $i <= 1000; $i++){
	fwrite($ar, generate_string($permitted_chars, 3));
	fwrite($ar, "\n");
}

for ($n = 0; $n <= 1000; $n++){
	fwrite($ar, generate_string($permitted_chars, 4));
	fwrite($ar, "\n");
}

for ($m = 0; $m <= 1000; $m++){
	fwrite($ar, generate_string($permitted_chars, 5));
	fwrite($ar, "\n");
}

for ($k = 0; $k <= 1000; $k++){
	fwrite($ar, generate_string($permitted_chars, 6));
	fwrite($ar, "\n");
}

for ($j = 0; $j <= 1000; $j++){
	fwrite($ar, generate_string($permitted_chars, 7));
	fwrite($ar, "\n");
}
echo "Trabajo Terminado";

 ?>