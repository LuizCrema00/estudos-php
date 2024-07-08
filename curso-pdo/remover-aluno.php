<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite'; //caminho absoluto
$pdo = new PDO('sqlite:' . $caminhoBanco); //conexao com o banco de dados sqlite

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?');
$preparedStatement->bindValue(1, 4, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
