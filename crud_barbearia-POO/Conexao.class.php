<?php

class Conexao{

    function get_conetion(){
        $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
        try {
            $conn = new PDO("mysql:host=localhost;dbname=barbearia; charset=utf8", 'root', '', $opcoes);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // echo "Conectado";
        } catch(PDOException $e){
            echo "Falha na conexão ". $e->getMessage();
        }
        return $conn;
    }
}
?>