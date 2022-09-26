<?php
    require_once 'conexao.php';
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
        $stmt = $conn->prepare("SELECT * FROM Produtos");
        $stmt->execute();

        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                    echo "<tr>";
                        echo "<td>$row->Codigo</td>"; echo "<td>$row->Nome</td>";
                        echo "<td>$row->Descricao</td>"; echo "<td>R$ $row->Preco</td>";
                        echo "<td>
                        <a href='add.php?codigo= $row->Codigo' class='btn btn-outline-success'>Editar</a> 
                        <a href='del.php?codigo= $row->Codigo' class='btn btn-outline-danger'>Excluir</a>
                        </td>";
                    echo "</tr>";
                }
        } else {
            echo "Nenhum resultado encontrado";
        }
        ?>
                </tbody>
            </table>
            <button class='btn btn-outline-primary' onclick='location.href="add.php"'>
                Adicionar
            </button>
        </div>
    </body>
</html>
