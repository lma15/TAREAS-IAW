<?php
    $numero1 = readline("Introduce un numero: ");
    $numero2 = readline("Introduce otro numero: ");
    $numero3 = readline("Introduce otro numero: ");

    if ($numero1 > $numero2 && $numero1 > $numero3) {
        echo "El ", $numero1 , " es mayor .\n";
    }
    elseif ($numero2 > $numero1 && $numero2 > $numero3) {
        echo "El ", $numero2 , " es mayor .\n";
    }
    else {
        echo "El ", $numero3 , " es mayor .\n";
    }
?>