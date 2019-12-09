<?php


?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	

   
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Projeto Integrador DH" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	{{-- <link rel="stylesheet" href="css/icomoon.css"> --}}
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
	{{-- <link rel="stylesheet" href="{{asset('public/css/icomoon.css')}}"> --}}
    

	<!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    
    <script defer src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script defer src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script defer src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script defer src="js/jquery.waypoints.min.js"></script>
		<script defer src="js/sticky.js"></script>
	
		<!-- Stellar -->
		<script defer src="js/jquery.stellar.min.js"></script>
		<!-- Superfish -->
		<script defer src="js/hoverIntent.js"></script>
		<script defer src="js/superfish.js"></script>
		
		<!-- Main JS -->
		<script defer src="js/main.js"></script>
		 <!-- Scripts -->
		
</head>
<body>
	<main id="box-principal">
		<div id="page">

<!--  ==================== Cabeçalho do site - (INÍCIO) =======================  -->

            <div class="header-top">
                <div class="container-fluid">
                    <div class="row">
						
                        <div class="col-md-12 col-sm-12 text-right social">
							
                            <a href="https://www.facebook.com/" class="grow" target="_blank"><!-- <i class="icon-facebook2"></i> --> <i class="fab fa-facebook-square" title="Facebook"></i></a>
                            <a href="https://twitter.com/" class="grow" target="_blank"><!-- <i class="icon-twitter2"></i> --> <i class="fab fa-twitter-square" title="Twitter"></i></a>
                            <a href="https://www.instagram.com/" class="grow" target="_blank"><!-- <i class="icon-instagram2"></i> --><i class="fab fa-instagram" title="Instagram"></i></a>
							<a class="link-topo" href="faq">FAQ</a>
                        	<a class="link-topo" href="contato">Contato</a>
						</div>
                    </div>
                </div>
            </div>

<!--  ==================== Menu de navegação e logo - (INÍCIO) =======================  -->
            <header id="header-section" class="sticky-banner">
                <div class="nav-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="home"><img src="images/logo_2.png" style="width:3,5vw; height:6vh;" alt="Páginas do Bem" title="Páginas do Bem">
                            Páginas do Bem</a>

                        <div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
                            <ul class="navbar-nav ml-auto menu">
								<li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="ongs">ONGs</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="eventos">Eventos </a>									
								</li>
								<li class="nav-item">
									<a class="nav-link" href="galeria">Fotos</a>									
								</li>
									<a href="login" class="btn-login" >Login</a>
                            </ul>
                        </div>
                            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Login</button> -->
                            
                    </nav>
                </div>			
            </header>

                <!--  Conteudo dinâmico do projeto  -->
                @yield('content')




            <footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-md-offset-12 text-center">
								<div class="social social-footer">
									<a href="#"><i class="fab fa-facebook-square" title="Facebook"></i></a>
									<a href="#"><i class="fab fa-twitter-square" title="Twitter"></i></a>
									<a href="#"><i class="fab fa-instagram" title="Instagram"></i></a>
									
								</div> 
								<p>Copyright Projeto-integrador<a href="home"> Páginas do Bem</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by Alunos DH</p>
							</div>
						</div>
					</div>
				</div>
			</footer>	
		</div>
	</main>
</body>
</html>
	
			


