<?php

$pdo = new PDO('mysql:host=localhost;dbname=alura-play', 'root', 'Crema123@');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id !== null){
    header('Location: /?sucesso=0');
    exit();
}

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /?sucesso=0');
    exit();
}

$titulo = filter_input(INPUT_POST, 'titulo');
if ($titulo === false) {
    header('Location: /?sucesso=0');
    exit();
}


$sql = 'UPDATE videos SET url = :url, title = :title WHERE id = :id;';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $url);
$statement->bindValue(2, $titulo);
$statement->bindValue(3, $id, PDO::PARAM_INT);

if ($statement->execute() ===  false){
    header('Location: /?sucesso=0');
} else {
    header('Location: /?sucesso=1');
}