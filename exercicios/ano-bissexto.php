<?php

echo "Digite um ano: ";

$entrada = fgets(STDIN);
$ano = (int) $entrada;

if ($ano % 4 === 0) {
    echo "O $ano é um ano bissexto";
} else {
    echo "O $ano nao é um ano bissexto";
}