<?php

echo "Digite sua altura", PHP_EOL;
$entradaAltura = fgets(STDIN);
$altura = (float) $entradaAltura;

echo "Digite seu peso", PHP_EOL;
$entradaPeso = fgets(STDIN);
$peso = (float) $entradaPeso;

$calculo = $peso / ($altura * $altura);
var_dump($calculo);

if ($calculo < 18.5) {
    echo "Seu IMC é $calculo e voce esta abaixo do peso";
} elseif ($calculo > 18.5 && $calculo > 24.9) {
    echo "Seu IMC é $calculo e voce esta com o peso adequado";
} elseif ($calculo > 25 && $calculo < 29.9) {
    echo "Seu IMC é $calculo e voce esta com sobrepeso";
} elseif ($calculo > 30 && $calculo < 34.9) {
    echo "Seu IMC é $calculo e voce esta com obesidade grau 1";
} elseif ($calculo > 35 && $calculo < 39.9) {
    echo "Seu IMC é $calculo e voce esta com obesidade grau 2";
} elseif ($calculo > 40) {
    echo "Seu IMC é $calculo e voce esta com obesidade extrema";
}
