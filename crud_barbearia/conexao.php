<?php
$servername = 'localhost';
$username = 'root';
$pwd = '';
$dbname = 'barbearia';

try {
    $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
    $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $pwd, $opcoes);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Conectado";
} catch(PDOException $e){
    echo "Falha na conexão ". $e->getMessage();
}
?>