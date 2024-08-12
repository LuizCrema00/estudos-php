<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=alura-play', 'root', 'Crema123@', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    echo "Conexão bem-sucedida!";
    $pdo->exec('CREATE TABLE videos (id INT AUTO_INCREMENT PRIMARY KEY, url TEXT, title TEXT);');
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
