<?php

function ordenarArrayAlfabeticamente(array $arrayDeStrings): array //recebe um array de Strings como parametro
{
    sort($arrayDeStrings); //Ordena o array em ordem alfabetica

    return $arrayDeStrings;
}

$arrayDeStrings = ['banana', 'laranja', 'uva', 'abacaxi'];
$arrayOrdenado = ordenarArrayAlfabeticamente($arrayDeStrings);

var_dump($arrayOrdenado);