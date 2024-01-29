<?php
$numeros = [];
$nuevo = [];

for ($i = 0; $i < 15; $i++ ){
    $numeros [] = rand(0,100) ;
}
echo "Contenido del array original: ";
foreach ($numeros as $valor) {
    echo $valor . "  ";
}
$nuevo[]=$numeros[count($numeros)-1];
for($i=1;$i<count($numeros)-1;$i++){
   
 $nuevo[$i]=$numeros[$i-1]. " ";
} 
echo "<br>Contenido del array rotado: ";

foreach ($nuevo as $valor) {
    echo $valor . "  ";
}
?>