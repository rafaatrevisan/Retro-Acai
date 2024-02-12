<?php

require_once 'src/conexao-bd.php';
require_once 'src/Modelo/Produto.php';
require_once 'src/Respositorio/ProdutoRepositorio.php';

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->excluirProduto($_POST['id']);

header('Location: admin.php');
die();

