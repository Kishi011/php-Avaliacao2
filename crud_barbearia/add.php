<?php
require_once 'conexao.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Barbearia - Adicionar Produto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Adicionar Produto</h1>
        <form class="container md rounded bg-light p-5" action="add1.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" placeholder="Insira o código do produto" name="codigo">
            </div>
            <div class="mb-3 mt-3">
                <label for="codigo" class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Insira o nome do produto" name="nome">
            </div>
            <div class="mb-3 mt-3">
                <label for="codigo" class="form-label">Descrição</label>
                <input type="text" class="form-control" placeholder="Insira a descrição do produto" name="descricao">
            </div>
            <div class="mb-3 mt-3">
                <label for="codigo" class="form-label">Preço</label>
                <input type="text" class="form-control" placeholder="Insira o preço do produto" name="preco">
            </div>
            <div class="mb-3 mt-3">
                <input type="submit" class="btn btn-outline-primary" value="Adicionar">
            </div>
        </form>
    </body>
</html>