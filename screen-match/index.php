<?php

require 'autoload.php';

use ScreenMatch\Modelo\{
    Filme, Episodio, Serie, Genero, Titulo
};

use ScreenMatch\Calculos\{
    CalculadoraDeMaratona, ConversorNotaEstrela
};

echo "Bem vindo ao screen-match". PHP_EOL;

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media(), PHP_EOL;

echo $filme->anoLancamento, PHP_EOL;

$serie = new Serie (
    'Lost',
    2007, 
    Genero::Drama,
    10,
    20,
    30
);

$episodio = new Episodio($serie, 'episodio Piloto', 1);

var_dump($serie);

echo $serie->anoLancamento, PHP_EOL;

$serie->avalia(8);

echo $serie->media(), PHP_EOL;

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, voce precisa de $duracao minutos", PHP_EOL;

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie), PHP_EOL;
echo $conversor->converte($filme);
