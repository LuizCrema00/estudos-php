<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo ao screen-match". PHP_EOL;

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media(), PHP_EOL;

echo $filme->anoLancamento;
