<?php
use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;

$pdo = new PDO('mysql:host=localhost;dbname=alura-play', 'root', 'Crema123@');

// Validar o ID
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id === null) {
    header('Location: /?sucesso=0');
    exit();
}

// Validar a URL
$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /?sucesso=0');
    exit();
}

// Validar o título
$titulo = filter_input(INPUT_POST, 'titulo');
if ($titulo === false || $titulo === null) {
    header('Location: /?sucesso=0');
    exit();
}

// Criar a entidade Video e atualizar o repositório
$video = new Video($url, $titulo);
$video->setId($id);

$repository = new VideoRepository($pdo);
if ($repository->update($video)) {
    header('Location: /?sucesso=1');
} else {
    header('Location: /?sucesso=0');
}
