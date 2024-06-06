<?php

echo "Digite uma temperatura em Celcius: ";

$entrada = fgets(STDIN);
$celcius = (float) $entrada;
$farenheint = ($celcius * 1.8) + 32;

echo "A conversao de Celcius para Farenheint é $farenheint";