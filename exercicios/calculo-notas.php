<?php

//calculo de notas informando pelo terminal
$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

if ($quantidadeDeNotas > 0) {
    $mediaNotas = array_sum($notas) / $quantidadeDeNotas;
    echo "A média das notas é: " . $mediaNotas . PHP_EOL;
} else {
    echo "Nenhuma nota foi informada." . PHP_EOL;
}

//calculo de notas ja definidas no array
$notas1 = [5, 5, 5];
$quantidadeDeNotas1 = count($notas);

$mediaNotas1 = array_sum($notas1) / $quantidadeDeNotas1;

echo $mediaNotas1;


