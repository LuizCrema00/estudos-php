<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite'; //caminho absoluto
$pdo = new PDO('sqlite:' . $caminhoBanco); //conexao com o banco de dados sqlite

$student = new Student(
    null, 
    "Maria Claudia", 
    new DateTimeImmutable('1976-11-20')
); //instanciacao do objeto Student

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date)"; //insercao de aluno no banco sqlite
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo "Aluno incluído";
}