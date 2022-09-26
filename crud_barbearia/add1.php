<?php
require_once 'conexao.php';

$nome = $_REQUEST['nome'];
$desc = $_REQUEST['descricao'];
$preco = $_REQUEST['preco'];

$stmt = $conn->prepare("INSERT INTO Produtos(Nome, Descricao, Preco) VALUES ('$nome', '$desc', $preco)");
$stmt->execute();
header('Location:index.php');
?>