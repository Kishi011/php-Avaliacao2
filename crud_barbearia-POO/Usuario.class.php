<?php
require_once 'Conexao.class.php';

class Usuario {

    private String $email;
    private String $senha;

    function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function get_email(){ return $this->email; }
    public function get_senha(){ return $this->senha; }

    public function validaAcesso(){
        $conn = (new Conexao())->get_conetion();
        $stmt = $conn->prepare('SELECT * FROM Usuarios WHERE email=? AND senha=?');
        $stmt->bindParam(1, $this->get_email());
        $stmt->bindParam(2, $this->get_senha());
        if($stmt->execute()){
            if($stmt->rowCount()>0){
                // session_start inicia a sessão
                session_start();     
                //$linha = $resultado->fetch(PDO::FETCH_OBJ);
                $_SESSION['email'] = $this->get_email();
                $_SESSION['senha'] = $this->get_senha();
                header('location:acesso.php');
            } else {
                session_unset();
                session_destroy();
                header('location:index.php');
            }
        }
    }
}
?>