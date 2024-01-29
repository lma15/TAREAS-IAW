<?php 
$primernumero = 0;
$segundonumero = 1;
$cantidad = readline("Introduce  la cantidad: ");
echo $primernumero . "\n";

for ($i=0; $i < $cantidad; $i++) { 
    $variabletemporal = $primernumero;
    $primernumero = $segundonumero;
    $segundonumero = $variabletemporal + $primernumero;
    echo $primernumero . "\n";
}