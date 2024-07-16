<?php

require "src/conexaobd.php";
require "src/Model/Produto.php";
require "src/Repository/ProdutoRepository.php";

$produtoRepository = new ProdutoRepository($pdo);
$produtoRepository->deletar($_POST['id']);

header("Location: admin.php");