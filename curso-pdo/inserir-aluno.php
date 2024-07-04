<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite'; //caminho absoluto
$pdo = new PDO('sqlite:' . $caminhoBanco); //conexao com o banco de dados sqlite

$student = new Student(null, 'Luiz Crema', new DateTimeImmutable('2000-04-08')); //instanciacao do objeto Student

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')"; //insercao de aluno no banco sqlite

var_dump($pdo->exec($sqlInsert)); //método exec retorna o número de linhas afetadas