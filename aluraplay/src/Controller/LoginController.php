<?php

namespace Alura\Mvc\Controller;

use PDO;

class LoginController implements Controller 
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=alura-play', 'root', 'Crema123@');
    }
    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');

        $sql = 'SELECT * FROM users WHERE email = ?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->execute();

        $userData = $statement->fetch(PDO::FETCH_ASSOC);
        $correctPassword = password_verify($senha, $userData['senha'] ?? '');

       
        if($correctPassword) {
            $_SESSION['logado'] = true;
            if (password_needs_rehash($userData['senha'], PASSWORD_ARGON2ID)) {
                $statement = $this->pdo->prepare('UPDATE users SET senha = ? WHERE id = ?');
                $statement->bindValue(1, password_hash($senha, PASSWORD_ARGON2ID));
                $statement->bindValue(2, $userData['id']);
                $statement->execute();
            }
            header('Location: /');
        } else {
            header('Location: /login?sucesso=0');
        }
    }
}