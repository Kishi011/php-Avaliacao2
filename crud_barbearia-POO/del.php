<?php
require_once 'Conexao.class.php';
$con = new Conexao();
$conn = $con->get_conetion();

$codigo = $_REQUEST['codigo'];

$stmt = $conn->prepare("DELETE FROM Produtos WHERE Codigo=$codigo");
$stmt->execute();

header('Location:index.php');
?>