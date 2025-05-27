<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Techhub</title>
	<link rel="shortcut icon" href="../assets/images/TechHub.png" />
	<link rel="stylesheet" type="text/css" href="../assets/styles/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
</head>

<body>

	<?php include('../includes/header.php'); ?>

	<main>
		<div id="container-info">
			<h1>
				Curso de Desenvolvimento Web<br>
				<span>
					Avançado!
				</span>
			</h1>
			<p>
				O mundo do desenvolvimento web é tão amplo quanto a própria Internet. Grande parte das nossas vidas sociais e
				profissionais ocorre na Internet, o que estimulou setores voltados para a criação, o gerenciamento e a depuração
				de sites e aplicativos dos quais dependemos cada vez mais.
			</p>
			<a id="botao-cadastro" href="../pages/cadastro.php">
				Cadastre-se
			</a>
		</div>
		<div id="container-img">
			<img class="imagem" src="../assets/images/home.svg" id="home">
		</div>


	</main>
</body>

</html>