<?php
    require_once 'Conexao.class.php';

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
        <div class="container-sm p-5 m-5">
            <h1>Acesso Restrito - Barbearia</h1>
            <form action="login.php?idUsuario=1" method="POST">
                <div class="mb-3 mt-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input class="form-control" type="password" name="senha">
                </div>
                <div>
                    <input class="btn btn-outline-primary mt-3" type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </body>
</html>