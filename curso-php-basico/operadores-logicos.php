<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_php = false;

// AND
// var_dump($michis_felinos && $michis_4_patas);

// OR
#var_dump($michis_vuelan || $michis_4_patas);

// NOT
#var_dump(!$michis_4_patas);

# Experimento que te va hacer decir WTF

// te dara resultado true por la precedencia que con AND se lee de izquierda a derecha:
// es como tener unos parentesis en ($resultado = $michis_4_patas) 
$resultado = $michis_4_patas and $michis_programan_con_php;

// para que no lea la precedencia ponemos en paréntesis

// $resultado = ($michis_4_patas and $michis_programan_con_php);

var_dump( $resultado );

echo "\n";

