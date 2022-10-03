<?php
require_once 'Conexao.class.php';

class Produto {
    public $codigo;
    public $nome;
    public $desc;
    public $preco;

    function __construct()
    {
        
    }

    public function get_codigo() { return $this->codigo; }
    public function get_nome() { return $this->nome; }
    public function get_descricao() { return $this->desc; }
    public function get_preco() { return $this->preco; }


    function exibeProdutos(){
        $conn = (new Conexao())->get_conetion();
        $stmt = $conn->prepare("SELECT * FROM Produtos");
        $stmt->execute();

        if($stmt->rowCount() > 0){
            while($produtos = $stmt->fetch(PDO::FETCH_OBJ)){
                    echo "<tr>";
                        echo "<td>$produtos->Codigo</td>"; echo "<td>$produtos->Nome</td>";
                        echo "<td>$produtos->Descricao</td>"; echo "<td>R$ $produtos->Preco</td>";
                        echo "<td>
                        <a href='add.php?codigo= $produtos->Codigo' class='btn btn-outline-success'>Editar</a> 
                        <a href='del.php?codigo= $produtos->Codigo' class='btn btn-outline-danger'>Excluir</a>
                        </td>";
                    echo "</tr>";
                }
        } else {
            echo "Nenhum resultado encontrado";
        }
    }
}
?>