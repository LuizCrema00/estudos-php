<?php

$notas = [8.5, 7, 9.3, 5.5, 6, 4.2, 10, 6.5];

arsort($notas); //Ordena notas em ordem decrescente

$maioresNotas = array_slice($notas, 0, 3); //Extrai os 3 primerios elementos do array

echo "As tres maiores notas sao: ", PHP_EOL;
foreach($maioresNotas as $nota) {
    echo $nota, PHP_EOL;
}