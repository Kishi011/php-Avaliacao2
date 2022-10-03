<?php
require_once 'Usuario.class.php';

if(isset($_REQUEST['idUsuario'])){
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    $user = new Usuario($email, $senha);
    $user->validaAcesso();
}
?>