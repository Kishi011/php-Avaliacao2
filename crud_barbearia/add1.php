<?php
require_once 'conexao.php';

if(!isset($_REQUEST['codigo']) || $_REQUEST['codigo'] == ''){
	$nome = $_REQUEST['nome'];
	$desc = $_REQUEST['descricao'];
	$preco = $_REQUEST['preco'];

	$stmt = $conn->prepare("INSERT INTO Produtos(Nome, Descricao, Preco) VALUES ('$nome', '$desc', $preco)");
	$stmt->execute();
	header('Location:index.php');
} else {
	$codigo = $_REQUEST['codigo'];
	$nome = $_REQUEST['nome'];
	$desc = $_REQUEST['descricao'];
	$preco = $_REQUEST['preco'];

	$stmt = $conn->prepare("UPDATE Produtos SET Nome='$nome', Descricao='$desc', Preco=$preco WHERE Codigo=$codigo");
	$stmt->execute();
	header('Location:index.php');
}
?>