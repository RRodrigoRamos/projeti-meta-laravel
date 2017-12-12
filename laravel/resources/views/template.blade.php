<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
		<!-- SEO -->
	<title>Compra&amp;Venda .:Meio do Mundo:.</title>
    <meta name="author" content="Anderson Cruz,Rodrigo Ramos,Weslley Dutra"/>
    <meta name="description" content="Site de Compra e Venda, agindo como intermediario numa transação, para pessoas que residem na capital do estado do Amapá">
		<meta name="keywords" content="1.Vendas,2 compras, venda e compra, Vender, vende, Comprar" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
			<!-- Arquivos e Fontes -->
    <link rel="icon" href="img/amapa.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/amapa.png" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.css"/>
  	<link rel="stylesheet" type="text/css" media="screen" href="../css/index.css"/>
  	<link rel="stylesheet" type="text/css" media="screen" href="../css/paginas.css"/>
		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<main class="container-fluid"><!-- principal -->
	<span id="topoSite"> </span><!--botao de subi-->
	  <figure id="topo"> <!-- Logo Menu -->
        <img src="../img/topo/capa1.png" width="100%" height="100%" class="align-top img-fluid" alt="Compra e Vendo Meio do Mundo"/>
      </figure>
	<header><!-- inicio do Menu -->
  	<nav id="nav" class="navbar navbar-expand-lg navbar-light bg-light">
			<figure>
				 <img src="../img/topo/capa.png" width="300px" height="160px" class="d-inline-block align-top img-fluid" alt="Compra e Venda - MEIO DO MUNDO"/>
			 </figure>
			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="navbar-toggler-icon">
 				</span>
 			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<a class="nav-item nav-link active" href="/inicio">
					<i class="fa fa-home fa-lg" aria-hidden="true">
					</i> HOME
						<span class="sr-only">(current)</span>
				</a>
				<a class="nav-item nav-link" href="/categoria/acessorios">
					Acessórios
				</a>
				<a class="nav-item nav-link" href="/categoria/automotivos">
					Automotivos
				</a>
				<a class="nav-item nav-link" href="/categoria/eletronicos">
					Eletrônicos
				</a>
				<a class="nav-item nav-link" href="/categoria/eletrodomesticos">
					Eletrôdomesticos
				</a>
				<a class="nav-item nav-link" href="/categoria/imoveis">
					Imovéis
				</a>
				<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="/login" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-sign-in" aria-hidden="true">
								</i> LOGIN
							</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="/login">
								<i class="fa fa-check" aria-hidden="true">
									</i>
									Entra
							</a>
							<a class="dropdown-item" href="{{ route('register') }}">
								<i class="fa fa-check-square-o" aria-hidden="true">
								</i>
								Cadastro
							</a>
						</div>
					</li>
			</div>

			<!-- botao de pesquisa no menu -->
			<form id="pesquisa" class="form-inline my-lg-0 direita">
				<input class="form-control col-md-9" type="text" placeholder=" Pesquisar" aria-label="Search">
				<button class="btn btn-outline-success my-0" type="submit"> &nbsp;
					<i class="fa fa-search" aria-hidden="true">
					</i> &nbsp;
				</button>
			</form>

						<!-- icones de rede social -->
				<span id="icones">
					<a href="#twitter">
						<i class="fa fa-twitter fa-2x" aria-hidden="true">
						</i>
					</a>
					<a href="#facebook">
						<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
					</a>
					<a href="#instagran">
						<i class="fa fa-instagram fa-2x" aria-hidden="true"> </i>
					</a>
				</span>
      </nav><!-- Fim do Menu -->

      <!-- Inicio Topo -->
    @yield('propaganda-topo')
	</header><!-- Fim topo -->

	<!-- Area reservada ao Conteudo -->
	@yield('conteudo')
	<footer id="rodape" class="row"> <!-- inicio rodape -->
		<div id="fundoRodape">
			<!-- icone do rodape em destaque -->
		</div>
		<div class="col-sm-4 col-md-4">
			<ul>
				<li class="btn btn-outline-primary">
					<h5>
						<i class="fa fa-folder-open" aria-hidden="true"></i> Sobre o Site
					</h5>
				</li>
				<li>
					<i class="fa fa-sign-in" aria-hidden="true"></i>
					<a href="/login"> Entrar </a>
				</li>
				<li>
					<i class="fa fa-check-square-o" aria-hidden="true"></i> <a href="/register" target="_blank"> Cadastro</a>
				</li>
				<li>
					<i class="fa fa-bullhorn" aria-hidden="true"></i>
					<a href="/cadatrar_email" target="_blank"> Fique por dentro - Cadastrar Email</a>
				</li>
			</ul>
		</div>
		<div class="col-sm-4 col-md-4">
			<ul>
				<li class="btn btn-outline-primary">
					<h5>
						<i class="fa fa-folder-open" aria-hidden="true"></i> 	Sobre Nós
					</h5>
				</li>
				<li>
					<i class="fa fa-github" aria-hidden="true"></i>
					<a href="https://github.com/Andersonpinheirocruz" target="_blank"> Anderson Pinheiro </a>
				</li>
				<li>
					 <i class="fa fa-github" aria-hidden="true"></i>
					 <a href="https://github.com/dutraweslley" target="_blank"> Weslley Dutra </a>
				</li>
				<li>
					<i class="fa fa-github" aria-hidden="true"></i>
					 <a href="https://github.com/RRodrigoRamos" target="_blank"> Rodrigo B. Ramos </a>
				</li>
				<li class="text-center">
					<p>
						<i class="fa fa-copyright" aria-hidden="true"></i> COPYRIGHT 2017 - CVMM, TODOS OS DIREITOS RESERVADOS.<br />
						<a href="https://github.com/RRodrigoRamos/projeti-meta-2017_2" target="_blank"> Repositorio GitHub</a>
						<i class="fa fa-github-alt" aria-hidden="true"></i><br />
						<a href="https://creativecommons.org/licenses/by/3.0/br/"  target="_blank">
							2017 - 2017 Licença Creative Commons 3.0 International
						</a>
						<br/>
					</p>
				</li>
			</ul>
		</div>
		<div class="col-sm-4 col-md-4">
			  <ul>
				<li class="btn btn-outline-primary">
					<h5>
						<i class="fa fa-folder-open" aria-hidden="true"></i> Outras Informações
					</h5>
				</li>
				<li>
					 <i class="fa fa-university" aria-hidden="true"></i>
					 <a href="http://http://www.meta.edu.br/faculdade/" target="_blank"> Faculdade META </a>
				</li>
				<li>
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<a href="/enviar_mensagem" target="_blank"> Envie uma Mensagem </a>
				</li>
			</ul>
	   </div>
	<span>
		<a id="scrollUp" href="#topoSite" title="Voltar ao Topo!">
			<i class="fa fa-angle-double-up fa-3x" aria-hidden="true"></i>
		</a>
	</span>
		</footer><!--Fim Rodapé -->
</main>
	<script src="../js/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
