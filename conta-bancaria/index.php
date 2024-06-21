<?php

require __DIR__ . "/src/Conta.php";

$conta1 = new Conta (
    2000,
    'Luiz Guilherme Crema',
    '0123445'
);

var_dump($conta1);

// Testando depósito
$mensagemDeposito = $conta1->deposito(-500);
echo $mensagemDeposito . PHP_EOL; // Output: Não é possível depositar valor negativo

// Testando saque
$mensagemSaque = $conta1->saque(2200);
echo $mensagemSaque . PHP_EOL; // Output: Você não possui fundos o suficiente para saque

$mensagemSaque = $conta1->saque(1500);
echo $mensagemSaque . PHP_EOL; // Output: Saque realizado com sucesso!

var_dump($conta1); // Verificar o saldo atualizado
