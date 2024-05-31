<?php

echo 'Bem vindo ao screen match!', PHP_EOL;

//variaveis e operadores
$nomeFilme = "Top Gun - Maverick"; //variavel string
$anoLancamento = $argv[1] ?? 2022; 
$somaDeNotas = 5 + 3 + 10 + 2;
$notaFilme = $somaDeNotas / 4; //float
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
    echo "Esse filme é um lancamento";
} else {
    echo "Esse filme nao é um lancamento";
}