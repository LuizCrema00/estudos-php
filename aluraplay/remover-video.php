<?php

$pdo = new PDO('mysql:host=localhost;dbname=alura-play', 'root', 'Crema123@');

$id = $_GET['id'];
$sql = 'DELETE FROM videos WHERE id = ?';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);

if ($statement->execute() ===  false){
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}