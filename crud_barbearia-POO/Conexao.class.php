<?php

session_start();

class Conexao{

    function get_conetion(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "barbearia";
        $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password, $opcoes);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // echo "Conectado";
        } catch(PDOException $e){
            echo "Falha na conexão ". $e->getMessage();
        }
        return $conn;
    }
}
?>