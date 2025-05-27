<?php
// Exibe erros para debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Inclui a conexão com o banco
include('../conexao.php'); // Garante que seja incluído apenas uma vez

session_start();

// Verifica se a conexão foi estabelecida
if (!$conexao) {
    die("Erro ao conectar com o banco de dados: " . mysqli_connect_error());
}

// Captura os dados do formulário com proteção
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

// Verifica se o e-mail já está cadastrado
$sql = "SELECT COUNT(*) as total FROM tb_aluno WHERE email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] > 0) {
    $_SESSION['usuario_existe'] = true;
    header('Location: ../index.php');
    exit;
}

// Insere o usuário no banco
$sql = "INSERT INTO tb_aluno (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', md5('$senha'))";

if (mysqli_query($conexao, $sql)) {
    $_SESSION['status_cadastro'] = true;
}

mysqli_close($conexao);

header('Location: ../pages/cursos.php');
exit;
?>
