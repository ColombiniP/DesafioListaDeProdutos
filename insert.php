<?php

require_once "./conexaoDb.php";

$produtos = [
    'nome' => $_POST['nome'],
    'valor' => $_POST['valor'],
    'descricao' => $_POST['descricao'],
    'disponivel' => $_POST['disponivel'],
];

$query = "INSERT INTO `produtos` (nome, valor, descricao, disponivel) VALUES (:nome, :valor, :descricao, :disponivel)";

$stmt = $conexao->prepare($query);

$stmt->bindParam(':nome', $produtos['nome']);
$stmt->bindParam(':valor',$produtos['valor']);
$stmt->bindParam(':descricao',$produtos['descricao']);
$stmt->bindParam(':disponivel',$produtos['disponivel']);
$stmt->execute();

$stmt = null;
$conexao = null;

header("location:select.php?insert=TRUE");