<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '@Cartoon10*';
$dbName = 'forms';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
global $conexao;
/*if ($conexao->connect_errno) {
    echo 'ERROOU';
} else {
    echo 'Conexão efetuada com Sucesso';
}*/
?>

<!-- . -->