<?php
#bucle for 
echo "Bucle for \n";
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 5 == 0) {
            echo $i . " \n" ;
        }
    }
echo "\n";
#bucle while
echo "Bucle while \n";
$i=0;
    while ($i <=100) {
        echo $i , "\n";
        $i += 5;
    }
echo "\n";
echo "Bucle do-while \n";
$i= 0;
do {
    echo $i , "\n";
    $i += 5;
}
    while ($i <= 100);
echo "\n";

?>