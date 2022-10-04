<?php
    require_once 'Conexao.class.php';
    require_once 'Usuario.class.php';

    $conn = (new Conexao())->get_conetion();

    if(isset($_SESSION['idUsuario'])){
        header('Location: acesso.php');
        exit;
    }
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Barbearia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
        <div class="validacao">
            <img src="img/logo.jpg">
            <h1>Acesso Restrito - Barbearia</h1>
            <form action="login.php?idUsuario=1" method="POST">
                <div class="mb-3 mt-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input class="form-control" type="password" name="senha" required>
                </div>
                <div>
                    <input class="btn btn-primary mt-3 btn-valida" type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </body>
</html>