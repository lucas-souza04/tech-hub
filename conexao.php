<?php
$hostname = 'localhost';
$db = 'mysql';
$username = 'root';
$password = 'root';

$conexao = new mysqli($hostname, $username, $password, $db);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>