<?php

function calculoImc(float $peso, float $altura): float
{
    $calculo = $peso / ($altura * $altura);
    return $calculo;

}

echo "Digite sua altura", PHP_EOL;
$entradaAltura = fgets(STDIN);
$altura = (float) $entradaAltura;

echo "Digite seu peso", PHP_EOL;
$entradaPeso = fgets(STDIN);
$peso = (float) $entradaPeso;

$resultado = calculoImc($peso, $altura);

if ($resultado < 18.5) {
    echo "Seu IMC é $resultado e voce esta abaixo do peso";
} elseif ($resultadp > 18.5 && $resultado > 24.9) {
    echo "Seu IMC é $resultado e voce esta com o peso adequado";
} elseif ($resultado > 25 && $resultado < 29.9) {
    echo "Seu IMC é $resultado e voce esta com sobrepeso";
} elseif ($resultado > 30 && $resultado < 34.9) {
    echo "Seu IMC é $resultado e voce esta com obesidade grau 1";
} elseif ($resultado > 35 && $resultado < 39.9) {
    echo "Seu IMC é $resultado e voce esta com obesidade grau 2";
} elseif ($resultado > 40) {
    echo "Seu IMC é $resultado e voce esta com obesidade extrema";
}
