<?php

$caminhoArquivo = __DIR__ . '/teste.txt';

$conteudoArquivoFilme = file_get_contents($caminhoArquivo); //leitura do conteúdo completo do arquivo

echo $conteudoArquivoFilme, PHP_EOL;

//leitura de apenas a primeira linha

$arquivo = fopen($caminhoArquivo, 'r');

if ($arquivo) {
    $primeiraLinha = fgets($arquivo);
    fclose($arquivo);

    echo $primeiraLinha;
}