<?php
$ladoizquierdo = readline("Dime la medida del lado izquierdo: ");
$base = readline("Dime la medida de la base: ");
$ladoderecho = readline("Dime la medida del lado derecho: ");

    if ($ladoizquierdo == $base && $base == $ladoderecho) {
        echo "El triangulo es equilátero. \n";
    } elseif ($ladoizquierdo == $base || $ladoizquierdo == $ladoderecho || $base == $ladoderecho) {
        echo "El triangulo es isósceles. \n";
    } else {
        echo "El triangulo es escaleno. \n";
    }
?>