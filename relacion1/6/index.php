<?php
    $numero = readline("Introduce un numero entre 1 y 7: ");

   switch($numero){
    case 1:
        echo "Es Lunes.\n";
        break;
    case 2:
        echo "Es Martes.\n";
        break;
    case 3:
        echo "Es Miercoles. \n";
        break;
    case 4:
        echo "Es Jueves.\n";
        break;
    case 5:
        echo "Es Viernes.\n";
        break;
    case 6:
        echo "Es Sabado.\n";
        break;
    case 7:
        echo "Es Domingo.\n";
        break;
    default:
        echo "Introduciste un valor incorrecto. \n";
   } 
?>