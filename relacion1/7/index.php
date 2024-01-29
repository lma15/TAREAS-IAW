<?php
    $edad = readline("Introduce tu edad: ");
    $carnet = readline("Tienes carnet de conducir (si/no): ");
    if ($edad >= 18 && $carnet == "si") {
        echo "Puedes conducir .\n";
    }
    elseif ($edad > 18 && $carnet == "no") {
        echo "No puedes conducir.\n";
    }
    else {
        echo "No puedes conducir.\n";
    }
?>