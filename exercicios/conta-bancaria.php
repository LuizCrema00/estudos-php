<?php

$saldo = 1000;
$titularConta = "Luiz Guilherme Crema";

do {
    echo "***********", PHP_EOL;
    echo "Titular: $titularConta", PHP_EOL;
    echo "Saldo Atual: R$ $saldo", PHP_EOL;
    echo "***********", PHP_EOL;
    echo "1-Consultar saldo atual", PHP_EOL;
    echo "2-Sacar Valor", PHP_EOL;
    echo "3-Depositar valor", PHP_EOL;
    echo "4-Sair", PHP_EOL;

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "***********", PHP_EOL;
            echo "Titular: $titularConta", PHP_EOL;
            echo "Saldo Atual: $saldo", PHP_EOL;
            echo "***********", PHP_EOL;
            break;

        case 2:
            echo "Qual o valor que deseja sacar?", PHP_EOL;
            $valorASacar = (float) fgets(STDIN);
            if ($valorASacar > $saldo) {
                echo "Saldo insuficiente", PHP_EOL;
            } else {
                $saldo -= $valorASacar;
            }
            break;
        case 3:
            echo "Quanto deseja depositar", PHP_EOL;
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            break;
        case 4:
            echo "Adeus", PHP_EOL;
            break;
        default:
            echo "opcao invalida", PHP_EOL; 
            break;
    }
} while ($opcao != 4);