<?php

require_once 'Usuario.class.php';

$email = '';
$senha = '';

if(isset($_REQUEST['idUsuario'])){
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
        
    $user = new Usuario($email, $senha);
    $user->validaAcesso();
}
else {
    header("location: index.php");
    exit;
}

?>