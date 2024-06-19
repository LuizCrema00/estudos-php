<?php

function calculoTemperatura (float $celcius): float
{
    $calculo = ($celcius * 1.8) + 32;
    return $calculo;
}

echo "Digite uma temperatura em Celcius: ";

$entrada = fgets(STDIN);
$celcius = (float) $entrada;
$farenheint = calculoTemperatura($celcius);

echo "A conversao de Celcius para Farenheint é $farenheint";