<?php

$contador = 0;
do{
    $quadrado = $contador * $contador;

    echo "O quadrado de $contador é $quadrado <br>";
    $contador++;

    
}while($contador <= 10);

// while só executa se a condição for verdadeira
// do executa de qualquer maneira, pelo menos uma vez

?>

