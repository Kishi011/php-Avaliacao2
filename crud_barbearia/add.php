<?php
require_once 'conexao.php';

if(!isset($_REQUEST['codigo'])){
  //adicionando produto
  $titulo = "Barbearia - Adicionar Produto";
  $codigo = "";
  $nome = "";
  $descricao = "";
  $preco = "";
} else {
  //editando produto
  $titulo = "Barbearia - Editar Produto";
  $codigo = $_REQUEST['codigo'];
  $stmt = $conn->prepare("SELECT * FROM Produtos WHERE codigo=$codigo");
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_OBJ);
  $nome = $row->Nome;
  $descricao = $row->Descricao;
  $preco = $row->Preco;
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $titulo ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><?php echo $titulo ?></h1>
        <form class="container md rounded bg-light p-5" action="add1.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" placeholder="Insira o código do produto" name="codigo" value="<?php echo $codigo; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="codigo" class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Insira o nome do produto" name="nome" value="<?php echo $nome; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="codigo" class="form-label">Descrição</label>
                <input type="text" class="form-control" placeholder="Insira a descrição do produto" name="descricao" value="<?php echo $descricao; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="codigo" class="form-label">Preço</label>
                <input type="text" class="form-control" placeholder="Insira o preço do produto" name="preco" value="<?php echo $preco; ?>">
            </div>
            <div class="mb-3 mt-3">
                <input type="submit" class="btn btn-outline-primary" value="Adicionar">
            </div>
        </form>
    </body>
</html>