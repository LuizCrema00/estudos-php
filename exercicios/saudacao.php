<?php

echo "Digite um horario: ";
$entrada = fgets(STDIN);
$horario = (float) $entrada;

if ($horario > 6 && $horario < 12) {
    echo "Bom dia";
} elseif($horario > 12 && $horario < 18) {
    echo "Boa Tarde";
} elseif($horario > 18 && $horario < 24) {
    echo "Boa Noite";
}