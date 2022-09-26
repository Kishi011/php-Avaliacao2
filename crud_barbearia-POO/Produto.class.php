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

}
?>