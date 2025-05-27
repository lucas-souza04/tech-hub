<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>TechHub</title>
	<link rel="shortcut icon" href="../assets/images/TechHub.png" />
	<link rel="stylesheet" type="text/css" href="../assets/styles/sobre.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
<?php include('../includes/header.php'); ?>
	<main>
		<div id="container-info">
			<div id="informacoes-curso">
				<h1 class="titulo">
					Cursos
				</h1>
				<h2 class="sub-titulo">
					Desenvolvimento Web Avançado
				</h2>
			</div>
			<div id="o-que-vamos-aprender">
				<h1 class="titulo">
					O que você aprenderá
				</h1>
				<div>
					<ul class="conteudos">
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/check.svg" class="icon">
								Serão capazes a desenvolver projetos web avançados.
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/check.svg" class="icon">
								Dominar React, Angular, TypeScript, jQuery, BootStrap entre outros.
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/check.svg" class="icon">
								Geo-localização.
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/check.svg" class="icon">
								Criar gráficos avançados.
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/check.svg" class="icon">
								Web Responsive.
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/check.svg" class="icon">
								Google Chart API.
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="este-curso-inclui">
				<h1 class="titulo">
					Este curso inclui:
				</h1>
				<div>
					<ul class="conteudos">
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/play.svg" class="icon">
								38,5 horas de vídeo sob demanda
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/file.svg" class="icon">
								9 artigos
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/download.svg" class="icon">
								8 recursos para download
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/mobile.svg" class="icon">
								Acesso no dispositivo móvel e na TV
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="../assets/images/certificate.svg" class="icon">
								Certificado de conclusão
							</div>
							<div style="width: 700px; height: 700px;">
								<canvas id="grafico1"></canvas>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="container-img">
			<img class="imagem" src="../assets/images/aula.jpg" id="aula">
			<div id="detalhes-curso">
				<h2 class="sub-titulo">
					Inscreva-se neste curso e tenha acesso ilimitado
				</h2>
				<button type="button" disabled>
					Indisponível no momento
				</button>
				<ul class="detalhes">
					<li>
						<div class="item">
							<img src="../assets/check.svg" class="icon">
							Mais de 25.000 alunos.
						</div>
					</li>
					<li>
						<div class="item">
							<img src="../assets/images/check.svg" class="icon">
							Ferramentas de engajamento de aprendizado.
						</div>
					</li>
					<li>
						<div class="item">
							<img src="../assets/images/check.svg" class="icon">
							Curso com atualizações garantidas pelo instrutor.
						</div>
					</li>
				</ul>

			</div>

		</div>


	</main>

</body>


</html>