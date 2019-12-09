<?php


?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@section('title', 'Páginas do Bem')
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	{{-- <link rel="stylesheet" href="css/icomoon.css"> --}}
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{asset('css/superfish.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
	<link rel="stylesheet" href="{{asset('css/perfil.css')}}">

	{{-- <link rel="stylesheet" href="{{asset('public/css/icomoon.css')}}"> --}}


	<!-- Modernizr JS -->
    {{-- <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script> --}}


	<script defer src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script defer src="{{asset('js/jquery.easing.1.3.js')}}"></script>
		<!-- Bootstrap -->
		<script defer src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- Waypoints -->
		<script defer src="{{asset('js/jquery.waypoints.min.js')}}"></script>
		<script defer src="{{asset('js/sticky.js')}}"></script>


		<!-- Stellar -->
		<script defer src="{{asset('js/jquery.stellar.min.js')}}"></script>
		<!-- Superfish -->
		{{-- <script defer src="{{asset('js/hoverIntent.js')}}"></script> --}}
		<script defer src="{{asset('js/superfish.js')}}"></script>

		<!-- Main JS -->
		<script defer src="{{asset('js/main.js')}}"></script>



		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

		<script defer src={{url('js/consultas.js')}}></script>





</head>
<body>
	<main id="box-principal">
		<div id="page">

<!--  ==================== Cabeçalho do site - (INÍCIO) =======================  -->

            <div class="header-top">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 text-right social">

							<a class="link-topo" href="/faq">FAQ</a>
							<a class="link-topo" href="/contato">Contato</a>
                            <a href="https://www.facebook.com/" class="grow" target="_blank"><!-- <i class="icon-facebook2"></i> --> <i class="fab fa-facebook-square" title="Facebook"></i></a>
                            <a href="https://twitter.com/" class="grow" target="_blank"><!-- <i class="icon-twitter2"></i> --> <i class="fab fa-twitter-square" title="Twitter"></i></a>
							<a href="https://www.instagram.com/" class="grow" target="_blank"><!-- <i class="icon-instagram2"></i> --><i class="fab fa-instagram" title="Instagram"></i></a>
							
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
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{url('images/logo_2.png')}}" style="width:3,5vw; height:6vh;" alt="Páginas do Bem" title="Páginas do Bem">
                            Páginas do Bem</a>

                        <div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
							@guest

                            <ul class="navbar-nav ml-auto menu">
								<li class="nav-item">
                                    <a class="nav-link" href="{{asset('/')}}">Início</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{asset('ongs')}}">ONGs</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{asset('eventos')}}">Eventos</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{asset('galeria')}}">Fotos</a>
								</li>
									<a href="{{asset('login')}}" class="btn-login" >Login</a>

							</ul>
							@else
							<ul class="navbar-nav ml-auto menu">
								<li class="nav-item">
									<a class="nav-link" href="{{asset('/')}}">Início</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{asset('ongs')}}">ONGs</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{asset('eventos')}}">Eventos</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{asset('galeria')}}">Fotos</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{asset('busca')}}">Buscar</a> <!-- linkar pag de eventos -->
								</li>

							{{-- 	@if (Auth::user()->id == 1) <!-- criar controller ONG_HAS_USER -->

								<li class="nav-item">
									<a class="nav-link" href="{{asset('home/minhas-ongs/admin')}}">Minha Ong</a>
								</li>

								@endif --}}
								{{-- <li class="nav-item">
									<a class="nav-link" href="{{asset('galeria')}}">Fotos</a>
								</li> --}}
								<li class="nav-item  ml-3">
									
									@if(Auth::user()->avatar == null)
										<a href="/home"><img src="{{ url('images/avatar-default.png') }}" id="icon-avatar"  title="{{Auth::user()->name }}"></a>
									@else 
										<a href="/home"><img src="{{ url(Auth::user()->avatar) }}" id="icon-avatar"  title="{{Auth::user()->name }}"></a>
									@endif
								</li>
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle ml-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									
										<span class="caret"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item " href="{{url('minhaOng/')}}/{{Auth::user()->id}}">Minha ONG</a>
											<a class="dropdown-item  " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										{{ __('Sair') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
											<div class="dropdown-divider"></div>
                                            <a class=" dropdown-item " href="{{asset('home')}}" data-toggle="modal" data-target="#modalExemplo">Encerrar Conta</a>
									{{-- 		<a href="{{url('home/perfilEditar')}}" class="btn btn-secondary">Alterar Perfil</a> --}}

									</div>
								</li>
							
							{{-- 	<li class="nav-item mt-2">
									<a class="btn-logout ml-3" href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										{{ __('Sair') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</li> --}}


                            </ul>
							@endguest
                        </div>
                            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Login</button> -->

                    </nav>
                </div>





            </header>

                {{--  ###############  MODAL DE ALERTA DE EXCLUSÂO DE PERFIL--}}
                            @guest

                            @else

                                <!-- Modal -->
                                <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Exclusão de conta.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            Você esta prestes a excluir sua conta, todos os dados vinculados na sua conta, fotos, ongs, eventos, et... Serão excluídos permanentemente.
                                            <h4 >Você desejá excluir?</h4>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-alert" data-dismiss="modal">Cancelar</button>
                                            <form action="/delete/0" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}


                                                <input type="hidden" name="identificador" value="{{ Auth::user()->id }}">
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            @endguest

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
								<p>Copyright Projeto Integrador <a href="{{asset('home')}}"> Páginas do Bem</a>. Todos os direitos reservados.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</main>
</body>






</html>





