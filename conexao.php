<?php
$hostname = 'localhost';
$db = 'tech_hub';
$username = 'root';
$password = 'root';

$conexao = new mysqli($hostname, $username, $password, $db);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>