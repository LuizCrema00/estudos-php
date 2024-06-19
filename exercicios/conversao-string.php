<?php

$string = [
    "nome" => "Luiz Guilherme Crema",
    "anoNascimento" => 2000,
    "profissao" => "dev"
];

$objeto = json_encode($string); //transforma o array associativo de string em um objeto JSON

echo $objeto, PHP_EOL;

var_dump(json_decode($objeto, true)); //transformando devolta em array associativo