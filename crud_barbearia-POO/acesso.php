<?php
    require_once 'Conexao.class.php';
    require_once 'Produto.class.php';

    $con = new Conexao();
    $conn = $con->get_conetion();
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Barbearia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Barbearia</h1>

        <div class="container-md">
            <table class='table table-striped'>
                <thead>
                    <th>Código</th> <th>Nome</th>
                    <th>Descrição</th> <th>Preço</th>
                    <th>Ações</th>
                </thead>
                <tbody>
        <?php
            $produtos = (new Produto())->exibeProdutos();
        ?>
                </tbody>
            </table>
            <button class='btn btn-outline-primary' onclick='location.href="add.php"'>
                Adicionar
            </button>
            <button class='btn btn-outline-danger' onclick='location.href="logout.php"'>
                Sair
            </button>
        </div>
    </body>
</html>