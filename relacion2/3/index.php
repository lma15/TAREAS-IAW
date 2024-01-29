<?php
    $numero = readline("Introduce un numero: ");
    $digitos = 0;
do{
	$numero = floor($numero / 10);
	$digitos = $digitos + 1;
} while ($numero > 0);
echo " Tu numero tiene " . $digitos . " digito/s \n";
?>