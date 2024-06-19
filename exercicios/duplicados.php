<?php
// Array de entrada com elementos duplicados
$array = [1, 2, 2, 3, 4, 4, 5];

// Remove os elementos duplicados usando array_unique
$arrayUnico = array_unique($array);

// Reindexa o array para que os índices sejam sequenciais
$arrayUnico = array_values($arrayUnico);

// Exibe o array resultante
var_dump($arrayUnico);
