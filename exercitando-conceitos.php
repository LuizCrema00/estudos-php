<?php

echo 'Bem vindo ao screen match!', PHP_EOL;

//variaveis e operadores
$nomeFilme = "Top Gun - Maverick"; //variavel string

$anoLancamento = 2022; 


$quantidadeDeNotas = $argc - 1;
$notas = [];

//Estrutura de repeticao
for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

var_dump($notas);

$notaFilme = array_sum($notas) / $quantidadeDeNotas;


$planoPrime = true; //booleana
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

//Tratando Textos
echo "Nome do Filme: ". $nomeFilme, PHP_EOL; //Concatenacao
echo "Nota do filme: $notaFilme", PHP_EOL; //Interpolacao
//Diferenca entre aspas duplas e aspas simples
//Aspas duplas sao usadas quando precisamos concatenar ou interpolar strings com variaveis, ja as simples podemos usar quando queremos digitar apenas um texto

echo "Ano de lancamento: $anoLancamento", PHP_EOL;

//Estruturas de decisao
//Bloco condicional
if ($anoLancamento > 2022) {
    echo "Esse filme é um lancamento", PHP_EOL;
} else {
    echo "Esse filme nao é um lancamento", PHP_EOL;
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Acao",
    "Thor Ragnarok" => "Herói",
    "Se beber nao case" => "Comédia",
    default => "Genero desconhecido"
};

echo "O genero do filme é : $genero", PHP_EOL;

//Array associativo
$filme = [
    "nome" => "Thor Ragnarok",
    "Ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói"
];

var_dump($filme);

