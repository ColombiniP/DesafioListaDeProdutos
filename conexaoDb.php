<?php

try {
    
    $dsn = "sqlite:listaDeProdutos.db";
    $conexao = new PDO($dsn);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

$query = "CREATE TABLE IF NOT EXISTS produtos (produtos_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome TEXT, valor INT, descricao TEXT, disponivel BOOLEAN)";

$conexao->exec($query);