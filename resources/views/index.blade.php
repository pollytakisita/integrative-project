@extends('layouts.app')
@section('content')
<!--  =========================== Seção home - Seja voluntário  (INÍCIO)  ==========================  -->

<a href="login" target="_blank" class="">
		<section class="home" id="home">
			<div class="overlay"></div>
			<div class="home-cover text-center" data-stellar-background-ratio="1" style="background-image: url(images/cover_nature_01.jpg);background-size: cover; background-repeat: no-repeat;">
				<a href="login" class="" title="Seja Voluntário">
					<div class="desc ">
						<h2><strong>Seja voluntário!</strong></h2>
						<span>Encontre aqui um trabalho voluntário para participar </span>
						<button type="button" class="btn btn-success">Comece já</button>
					</div>
				</a>
			</div>
		</section>
	</a>

<!--  =========================== Seção home - Seja voluntário  (FINAL)  ==========================  -->


<!--  =========================== Seção descritiva do site dos Projetos -  (INÍCIO)  ==========================  -->

	<div id="projeto" class="projeto-section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading-section ">
					<h3>Encontre um evento para participar</h3>
				</div>
			</div>

			<div class="row row-bottom-padded-md " >
				<div class="col-lg-4 col-md-12 col-sm-12 text-center">
					<a href="eventos" >
						<div class="projeto-img">
							<p>
								<img src="{{ url ('images/photo-children.jpg')}}" alt="Criança e Adolescente" title="Criança e Adolescente"class="img-responsive img-large img-projeto">
							</p>
						</div>
						<div class="projeto-text">
							<h3>Criança e Adolescente</h3>
							<div class="projeto-paragrafo">
								<p>Encontre aqui eventos que ajudam escolas, orfanatos, creches, hospitais e outras ações que promovam melhorias e apoio para a vida de crianças e adolescentes!</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-center">
					<a href="eventos" >
						<div class="projeto-img">
							<p>
								<img src="{{ url ('images/cover_animals_2.jpg')}}" alt="Proteção aos Animais" title="Proteção aos Animais" class="img-responsive img-large img-projeto">
							</p>
						</div>
						<div class="projeto-text">
							<h3>Proteção aos Animais</h3>
							<div class="projeto-paragrafo">
								<p>Encontre aqui uma ação e seja um voluntário para auxílio em eventos de adoção de animais, veterinários ou formandos em veterinária para cuidados com os animais, etc.!</p>
							</div>
						</div>
					</a>

				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-center">
					<a href="eventos" >
						<div class="projeto-img">
							<p>
								<img src="{{ url ('images/cover_meio_3.jpg')}}" alt="Meio Ambiente" title="Meio Ambiente" class="img-responsive img-large img-projeto">
							</p>
						</div>
						<div class="projeto-text">
							<h3>Meio Ambiente</h3>
							<div class="projeto-paragrafo">
								<p>Todos nós sabemos que o planeta Terra não está bem e que precisa da ajuda de todos os cidadãos. Seja um voluntário para contribuir com as ações práticas de conservação do meio ambiente!</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="projeto-paragrafo text-center mt-4">
			<a href="{{url('eventos')}}">
			<button class=" btn btn-primary">Ver Mais...</button>
			</a>
		</div>
	</div>


<!--  =========================== Seção descritiva do site dos Projetos -  (FINAL)  ==========================  -->


<!--  =========================== Seção motor de busca co filtros -  (INÍCIO)  ==========================  -->

<div id="busca-section" class="projeto-section">
	<div class="container ">
		<div class="row text-center">
			<div class="col-12 col-md-6  text-center heading-section ml-auto mr-auto">
				<h3>Busque aqui uma ONG para ajudar</h3>
				<form>
					  <div class="form-row align-items-center">
						<div class="col-sm-9 my-1">
							<input type="text" id="busca" class="form-control" required placeholder="Digite aqui qualquer palavra">
						</div>
						<div class="col-sm-3 my-1">
							<button type="" id="btn-busca" class="btn btn-success">Buscar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container ">
		<div class="row">
			<div class="col-md-12" id="box-busca">
				<div class="alert alert-danger text-center" style="display:none;" id="alert-busca">
					Digite uma palavra no campo.
				</div>


				<div id="box-result" style="display:none; max-height:800px; overflow:scroll; ">
					<table id="tabela" class="table table-striped table-responsive-sm my-ongs">
						<thead>
							<tr >
								<th scope="col" class="text-center" width="25%">Logo</th>
								<th scope="col" class="text-center" width="25%">Nome</th>
								<th scope="col" class="text-center" width="25%">Descrição</th>
								<th scope="col" class="text-center" width="25%">Bairro</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
						</table>
					</div>


				</div>
			</div>
		</div>
	</div>
<!--  =========================== Seção motor de busca com filtros -  (FINAL)  ==========================  -->

<!--  =========================== Seção resumo das notícias -  (INÍCIO)  ==========================  -->

<div id="noticia-section" class="projeto-section">
		<div class="container ">
			<div class="row">
				<div class="col-md-12 col-md-offset-12 text-center heading-section">
					<h3>Notícias</h3>
					<p>Acompanhe as notícias mais atuais.</p>
				</div>
			</div>
		</div>
		<div class="container ">
			<div class="row row-bottom-padded-md">
				<div class="col-lg-4 col-md-12 col-sm-12 box-img-animate">
					<div class="noticia">
					<iframe width="100%" height="280" src="https://www.youtube.com/embed/j8L1CcanjT8?mute=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="noticia-text">
							<div class="noticia-title">
								<h3><a target="_blank" href="https://www.youtube.com/watch?v=j8L1CcanjT8">Conheça os 17 Objetivos de Desenvolvimento Sustentável</a></h3>
								<p>Acesse aqui a Agenda 2030 na íntegra, com o documento final adotado na Cúpula das Nações Unidas sobre o Desenvolvimento Sustentável.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 box-img-animate">
					<div class="noticia">
					<iframe width="100%" height="280" src="https://www.youtube.com/embed/soT7jdW5bvE?mute=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="noticia-text">
							<div class="noticia-title">
								<h3><a target="_blank" href="https://www.youtube.com/watch?v=soT7jdW5bvE">Um olhar sobre o futuro do Santuário de Elefantes Brasil.</a></h3>
								<p>Nossa missão é proteger, resgatar e prover um santuário de ambiente natural para os elefantes em cativeiro.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-12 col-sm-12 box-img-animate">
						<div class="noticia">
							<iframe width="100%" height="280" src="https://www.youtube.com/embed/_oeYCEYpaRo?mute=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<div class="noticia-text">
								<div class="noticia-title">
									<h3><a target="_blank" href="https://www.youtube.com/watch?v=_oeYCEYpaRo">O trabalho infantil no Brasil</a></h3>
									<p>Os dados do Instituto Brasileiro de Geografia e Estatística (IBGE) de 2016 mostram que o Brasil tem 2,4 milhões de crianças e adolescentes entre 5 e 17 anos trabalhando.</p>

								</div>
							</div>
						</div>
					</div>
				<div class="clearfix visible-md-block"></div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12 col-md-12 text-center ">
					<a href="eventos" class="btn btn-success btn-lg">Mais Eventos</a>
				</div>
			</div> -->
		</div>
	</div>

        <!--  =========================== Seção resumo das notícias -  (FINAL)  ==========================  -->


@endsection

