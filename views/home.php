<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Seu servidor de Minecraft">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="CubeWorld, CubeWorlds, CubeWorldsBr, CubeWorldsBR, CubeWorldBr, CubeWorldBR, Cube, World, Minecraft, NetWork, CubeWorld NetWork, Servidores 1.8, Minigames.">
		<!-- Discord Info -->
		<meta property="og:title" content="CubeWorlds">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://cubeworlds.com.br">
		<meta property="og:image" content="https://cubeworlds.com.br/assets/img/logo.png">
		<meta property="og:description" content="Seu servidor de Minecraft">
		<!-- Designers -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/fontawesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
		<title>CubeWorlds - Um novo jeito de fazer servidores</title>
	</head>
	<body>
		<!-- Barra inicial -->
		<div class="top-bar">
			<div class="container my-1">
				<div class="row d-flex align-items-center">
					<div class="col-md-6 d-md-block d-none">
						<p class="badge badge-secondary"><i class="fa fa-envelope"></i> contato@cubeworlds.com.br</p>
					</div>
					<div class="col-md-6">
						<div class="d-flex justify-content-md-end justify-content-between">
							<ul class="social-custom social-icons list-inline">
								<li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-lg"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-youtube fa-lg"></i></a></li>
							</ul>
							<div class="login ml-4">
								<p class="badge badge-secondary"><i class="fa fa-user"></i> Login/Registro</p>
							</div>
							<div class="shop ml-3">
								<p class="badge badge-secondary"><i class="fa fa-cart-plus"></i> 0 Item</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand h1 ml-4" href="#">CubeWorlds</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownLoja" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i> Loja</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Servidores</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-book"></i> Regras</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-vote-yea"></i> Votar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-comments"></i> Fórum</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-newspaper"></i> Novidades</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-scroll"></i> ChangeLog</a>
						</li>
					</ul>
				</div>
			</nav>
		<!-- Carrousel -->
		<div id="banner" class="carousel slide" data-ride="banner">
			<div class="carousel-inner text-center">
				<div class="carousel-item active">
					<div class="d-flex h-100 align-items-center justify-content-center">
						<a class="btn btn-outline-primary text-light">Um novo jeito de fazer servidores</a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#banner" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- Servidor -->
		<div class="container-fluid bg-dark border-primary border-top border-bottom text-light pb-2">
			<div class="row justify-content-center">
				<div class="mt-5">
					<h3 class="text-uppercase text-center">Junte-se a familia dos cubos!</h3>
					<hr class="bg-primary">
					<p  id="msg" class="text-center mt-4 pt-2">Clique no botão para copiar o IP</p>
					<button id="copyButton" class="btn btn-outline-primary btn-block btn-inverse">
						<span id="copyTarget" class="text-uppercase text-light">mc.cubeworlds.com.br</span>
					</button>
					<p class="text-center mt-4">Versão 1.8.* - <span id="online">Carregando...</span></p>
				</div>
			</div>
		</div>
		<!-- Info -->
		<div class="container-fluid py-5 bg-primary">
			<div class="row justify-content-center text-center text-light">
				<div class="col-sm">
					<i class="fa fa-question fa-5x mb-2"></i>
					<h3 class="mb-3">Sobre</h3>
					<p>CubeWorlds não é mais um servidor 1.5.2 aberto para arrecadar lucros, nossa ideia é sua diversão na prática! Aqui priorizamos vocês jogadores, para ter a melhor experiência em nossa rede de servidores!</p>
				</div>
				<div class="col-sm">
					<i class="fa fa-dollar-sign fa-5x mb-2"></i>
					<h3 class="mb-3">Preço</h3>
					<p>Além de possuirmos preços totalmentes acessíveis, todo o dinheiro arrecadado em nossos servidores são convertidos para os próprios servidores, assim pagando despesas, e trazendo sempre novidades para os servidores.</p>
				</div>
				<div class="col-sm">
					<i class="fa fa-user-shield fa-5x mb-2"></i>
					<h3 class="mb-3">Privacidade</h3>
					<p>Nosso sistema de autenticação de contas é totalmente seguro, contamos com sistema de criptografia para manter sua maior segurança de ponta a ponta!</p>
				</div>
			</div>
		</div>
		<!-- Comentarios -->
		<div class="container-fluid py-3 bg-light">
			<div class="row justify-content-center">
				<h2 class="block-title title-light text-center"><i class="fa fa-comments-o"></i> Comentários</h2>
			</div>
			<div id="comments" class="carousel slide text-center my-5" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="mb-3" src="https://cravatar.eu/helmhead/zDookBr/64">
						<p class="mb-0 font-italic">"Servidor sempre com sistemas novos e uma equipe dedicada!"</p>
						<h6 class="mt-0">zDookBr | @WebDesigner</h6>
					</div>
					<div class="carousel-item">
						<img class="mb-3" src="http://cravatar.eu/helmhead/MHF_Question/64">
						<p class="mb-0 font-italic">Nenhum comentário no momento! Deseja mandar o seu? Envie para <strong>contato@cubeworlds.com.br</strong></p>
						<h6 class="mt-0">??? | ???</h6>
					</div>
				</div>
				<a class="carousel-control-prev" href="#comments" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#comments" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!-- Outros -->
		<div class="container-fluid bg-dark py-5">
			<div class="row justify-content-center">
				<div class="col-md-4">
					<!-- Facebook -->
						<iframe class="w-100" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcubeworlds&tabs&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" data-adapt-container-width="true" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>	
						<!-- Twitter -->
						<a class="twitter-timeline w-100" data-height="300" href="https://twitter.com/cubeworldsbr?ref_src=twsrc%5Etfw">Tweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<!-- Novidade -->
				<div class="col-md-6 mx-1">
					<div class="card w-100 h-100 d-flex">
						<div class="card-header text-center">
							Últimas Novidades <i class="fa fa-bell"></i>
						</div>
						<div class="card-body ml-2">
							<div class="card-title">
								<div class="row">
									<div class="col-md-8 h5">A geração de um grande servidor</div>
									<div class="col text-right"><span class="text-secondary">18/12/2018</span></div>
								</div>
							</div>
							<div class="card-subtitle mb-2 text-muted">
								O mundo não é o mesmo
							</div>
							<p class="card-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<blockquote class="blockquote mb-0 ml-3">
								<footer class="blockquote-footer font-italic">Usuario | Grupo</footer>
							</blockquote>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<!-- Parceiros -->
		<div id="parceiros" class="carousel slide bg-info py-5 text-light" data-ride="carousel">
			<h3 class="text-center text-uppercase mb-5">Parceiros</h3>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="text-center">
						<a href="https://devkewi.com.br" target="_blank"><img src="assets/img/parceiros/devkewi.png" alt="DEVKEWI"></a>
						<p class="text-light">
							<cite>"Não é um dos primeiros, mas definitivamente é um dos melhores, se não o melhor programador do mundo."</cite>
						</p>
						<p class="font-italic">DEVKEWI COMPANY &copy;</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#parceiros" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#Parceiros" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<!-- Equipe -->
		<div class="container-fluid bg-light pb-4">
			<h2 class="text-uppercase text-center pt-5 pb-2">EQUIPE</h2>
			<h5 class="text-center py-2">Direção</h5>
			<div class="row justify-content-center nick">
				<div class="head text-center px-5">
					<h6><span class="diretor">JimHunter</span></h6>
					<img src="https://cravatar.eu/helmhead/JimHunter/128">
				</div>
				<div class="head text-center px-5">
					<h6><span class="diretor">zDookBr</span></h6>
					<img src="https://cravatar.eu/helmhead/zDookBr/128">
				</div>
			</div>
			<h5 class="text-center mt-5">Sub-Direção</h5>
			<div class="row justify-content-center nick">
				<div class="head text-center px-5">
					<h6><span class="sub">Milek13</span></h6>
					<img src="https://cravatar.eu/helmhead/Milek13/128">
				</div>
			</div>
			<h5 class="text-center mt-5">Administração</h5>
			<div class="row justify-content-center nick">
				<div class="head text-center">
					<h6><span class="admin">Nick</span></h6>
					<img src="https://cravatar.eu/helmhead/n/128">
				</div>
			</div>
			<h5 class="text-center mt-5">Moderação</h5>
			<div class="row justify-content-center nick">
				<div class="head text-center">
					<h6><span class="mod">Nick</span></h6>
					<img src="https://cravatar.eu/helmhead/mod/128">
				</div>
			</div>
		</div>
		<!-- Patrocinio -->
		<div class="container-fluid bg-dark pt-5 pb-4">
			<div class="row justify-content-center text-light">
				<div class="col-6 col-sm-3 text-center border">
					<div class="py-5">
						<h6>Deseja seu banner apresentável aqui? Entre em contato com um membro da nossa equipe!</h6>
					</div>
				</div>
				<div class="col-6 col-sm-3 text-center border">
					<div class="py-5">
						<h6>Deseja seu banner apresentável aqui? Entre em contato com um membro da nossa equipe!</h6>
					</div>
				</div>
				<div class="col-6 col-sm-3 text-center border">
					<div class="py-5">
						<h6>Deseja seu banner apresentável aqui? Entre em contato com um membro da nossa equipe!</h6>
					</div>
				</div>
				<div class="col-6 col-sm-3 text-center border">
					<div class="py-5">
						<h6>Deseja seu banner apresentável aqui? Entre em contato com um membro da nossa equipe!</h6>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt-3 text-light border">
				<div class="py-5">
					<h6>Deseja seu banner apresentável aqui? Entre em contato com um membro da nossa equipe!</h6>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<footer class="footer bg-primary py-2 pt-4">
			<div class="container text-center">
				<img src="assets/img/favicon.png" width="32px" height="32px">
				<p class="text-light">CubeWorlds &copy; 2017-<?php echo date("Y"); ?> | Todos os direitos reservados.</p>
			</div>
		</footer>
		<script type="text/javascript" src="assets/js/jquery-3.3.1.slim.min.js"></script>
		<script type="text/javascript" src="assets/js/popper.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/javascript.js"></script>
	</body>
</html>