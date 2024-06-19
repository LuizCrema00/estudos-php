<?php

function calcular(int $numero1, int $numero2, string $operacao)
{
    switch($operacao) {
        case 'soma':
            return $numero1 + $numero2;
        case 'subtrai':
            return $numero1 - $numero2;
        case 'multiplica':
            return $numero1 * $numero2;
        case 'divide':
            if ($numero2 == 0) {
                return 'Erro: Divisao por zero';
            }

            return $numero1 / $numero2;
        default: 
            return 'Opcao invalida';
    }
}

$numero1 = 10;
$numero2 = 5;

echo "O numeros sao $numero1 e $numero2 , Digite qual operacao deseja realizar: Soma, subtrai, multiplica ou divide", PHP_EOL;
$operacao = trim(fgets(STDIN));
$resultado = calcular($numero1, $numero2, $operacao);
echo $resultado, PHP_EOL;
