<?php
require_once 'conexao.php';

$codigo = $_REQUEST['codigo'];

$stmt = $conn->prepare("DELETE FROM Produtos WHERE Codigo=$codigo");
$stmt->execute();

header('Location:index.php');
?>