<?php
require_once 'Conexao.class.php';

class Usuario {

    private $email;
    private $senha;

    function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function get_email(){ return $this->email; }
    public function get_senha(){ return $this->senha; }

    public function validaAcesso(){
        $conn = (new Conexao())->get_conetion();

        $resultado = $conn->prepare("SELECT * FROM usuarios As func WHERE Email=?  AND Senha=?");
        $resultado->bindParam(1, $this->email);
        $resultado->bindParam(2, $this->senha);

        if($resultado->execute()){
            if($resultado->rowCount()>0){
                // session_start inicia a sessão
                session_start();
                //$linha = $resultado->fetch(PDO::FETCH_OBJ);
                $_SESSION['idUsuario'] = 1;
                $_SESSION['email'] = $this->email;
                $_SESSION['senha'] = $this->senha;
                header('location: acesso.php');
            } else {
                session_unset();
                session_destroy();
                header('location: index.php');
            }
        }
    }
}
?>