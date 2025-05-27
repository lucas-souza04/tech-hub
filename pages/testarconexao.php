<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$banco = "mysql"; // ou o seu banco

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro: " . $conexao->connect_error);
}

echo "Conexão bem-sucedida!";
?>
