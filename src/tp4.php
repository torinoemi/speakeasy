<?php
echo "ingrese un numero de 4 digito.";
fscanf(STDIN, "%s", $numero)
if ($numero=>1000 and $numero =<9999){  
$unidad = $numero % 10;
$numero = (int) ($numero / 10) + 7;

$decena = $numero % 10;
$numero = (int) ($numero / 10) + 7;

$centena = $numero % 10;
$numero = (int) ($numero / 10) + 7;

$mil = ($numero % 10) + 7;

echo "Mil: $mil<br>";
echo "Centena: $centena<br>";
echo "Decena: $decena<br>";
echo "Unidad: $unidad<br>";

$numero1 = $centena;
$unidad = $numero1; 
$numero2 = $mil;
$decena = $numero2;

} else {
    echo "esta mal el digito."
}

?>