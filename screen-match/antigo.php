<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php"; //__DIR__ é como se fosse uma abreviacao para fornecer o caminho absoluto para o arquivo

echo 'Bem vindo ao screen match!', PHP_EOL;

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022; 


$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;

$planoPrime = true; 
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do Filme: ". $nomeFilme, PHP_EOL; 
echo "Nota do filme: $notaFilme", PHP_EOL; 
echo "Ano de lancamento: $anoLancamento", PHP_EOL;

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Acao",
    "Thor: Ragnarok" => "Herói",
    "Se beber nao case" => "Comédia",
    default => "Genero desconhecido"
};

echo "O genero do filme é : $genero", PHP_EOL;

$filme = criaFilme(
    nome: "Thor: Ragnarok", 
    anoLancamento: 2021, 
    nota: 7.8, 
    genero: "super=herói"
); //Parametros nomeados, isso é util pois sem a nomeacao de parametros, alguem pode enviar os parametros fora de ordem, causando erro na aplicacao

var_dump($notas); //acessa o array notas e mostras seus valores e seus tipos
sort($notas); //ordena o array notas em ordem crescente
var_dump($notas);
$menorNota = min($notas); //obtem a menor nota do array notas e armazena na variavel menorNota
echo $menorNota, PHP_EOL;

var_dump($filme->nome); //mostra a string do indice nome, do array armazenado na variavel $filme
$posicaoDoisPontos = strpos($filme->nome, ':'); //obtem a posicao do ':' da string nome, e armazena na variavel $posicaoDoisPontos
var_dump($posicaoDoisPontos);// mostra o valor armazenado na variavel $posicaoDoisPontos assim como seu tipo

var_dump(substr($filme->nome, 0, $posicaoDoisPontos)); //mostra uma substring a partir da funcao substr, essa funcao espera pelos parametros da string a ser acessada, aonde ela comeca e aonde ela termina

echo json_encode($filme); //Transforma uma array associativo em JSON
var_dump( json_decode('{"nome":"Thor: Ragnarok","Ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}', true)); //Transforma um JSON em array associativo

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);

