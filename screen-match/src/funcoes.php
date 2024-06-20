<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lancamento", PHP_EOL;
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo", PHP_EOL;
    } else {
        echo "Esse filme nao é um lancamento", PHP_EOL;
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme 
{
    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anoLancamento = $anoLancamento;
    $filme->genero = $genero;
    $filme->nota = $nota;
    
    return $filme;
}
