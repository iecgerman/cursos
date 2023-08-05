<?php

// Operador de asignación

// $edad_de_jaimito = ($edad_de_pepito = 18) + 5;

// echo "La edad de pepito es $edad_de_pepito \n";
// echo "La edad de Jaimito es $edad_de_jaimito \n";


// $contador = 1;

// Operadores de incremento

// echo $contador;

// $contador = $contador + 1;
// $contador += 30;
// $contador++;

/*

+=
-=
*=
/=

*/

$nombre = "Carlos";
$nombre .=  " " . "Santana";

echo $nombre;

echo "\n";

// $prestamo = 1000;

// $mes1 = $prestamo * 1.1;
// $mes2 = $mes1 * 1.1;
// $mes3 = $mes2 * 1.1;

// echo $mes1;
// echo "\n";
// echo $mes2;
// echo "\n";
// echo $mes3;
// echo "\n";

$contador = 1;
$resultado = $contador++;

echo $contador . "\n";
echo $resultado; // aqui nos da resultado 1 debido a la presedencia

echo "\n";