<?php

// Variables

$es_un_michi_grande =true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// Ejercicios

$es_un_michi_grande && $le_gusta_comer;
$es_un_michi_grande || $sabe_volar;
$sabe_volar || $tiene_2_patas;
$le_gusta_comer;
$le_gusta_comer || $es_un_michi_grande;
// Resultados

var_dump($es_un_michi_grande && $le_gusta_comer);