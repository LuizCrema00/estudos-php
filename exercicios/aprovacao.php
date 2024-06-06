<?php

$notas = [8.5, 7, 5.5, 6, 9.3, 4.2, 10, 6.5];

for ($i = 0; $i < count($notas); $i++) {
   if ($notas[$i] >= 6) {
        echo "Aluno com $notas[$i]: Aprovado ", PHP_EOL;
   } else {
    echo "Aluno com $notas[$i]: Reprovado", PHP_EOL;
   }
}

