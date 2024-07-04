<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite'; //caminho absoluto
$pdo = new PDO('sqlite:' . $caminhoBanco); //conexao com o banco de dados sqlite

$statement = $pdo->query('SELECT * FROM students;');
$studentList = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($studentList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'], 
        $studentData['name'], 
        new DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);