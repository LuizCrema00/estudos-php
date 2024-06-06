<?php

$arrayNumeros = range(0, 100);

for ($contador = 0; $contador < count($arrayNumeros); $contador++) {
    if ($arrayNumeros[$contador] % 2 === 1) {
        echo "$arrayNumeros[$contador]", PHP_EOL;
    }
}