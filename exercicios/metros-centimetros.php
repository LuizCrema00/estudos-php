<?php

$metros = 5;
$centimetros = $metros * 100;

echo "a conversao é $centimetros", PHP_EOL;

//Com entrada do usuário

echo "Digite o valor em metros: ";
$entrada = fgets(STDIN);
$metros1 = (float) $entrada;

$centimetros1 = $metros1 * 100;

echo $centimetros1;

