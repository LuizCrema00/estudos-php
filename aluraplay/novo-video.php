<?php

$pdo = new PDO('mysql:host=localhost;dbname=alura-play', 'root', 'Crema123@');

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /index.php?sucesso=0');
    exit();
}
$titulo = filter_input(INPUT_POST, 'titulo');

if ($titulo === false) {
    header('Location: /index.php?sucesso=0');
    exit();
}

$sql = 'INSERT INTO videos (url, title) VALUES (?, ?)';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $url);
$statement->bindValue(2, $titulo);

$statement->execute();

header('Location: /index.php');