@extends('layouts.app')
@section('content')


<!--  =========================== Seção Faq perguntas e respostas - (INÍCIO)  ==========================  -->
<section class="">
		<div id="faq" class="">
			<div class="container container-faq mb-5">	
			<div class="titulo">
					<div class="col-md-12 col-md-offset-12 text-center heading-section ">
						<h3>Dúvidas Frequentes</h3>
						<p>Confira algumas dúvidas sobre trabalho voluntário, e a Páginas do Bem.</p>
					</div>
					
			</div>	
				<div id="accordion">
					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link link-faq" data-toggle="collapse" href="#collapseOne">
									Quem somos?
							</a>
						</div>
						<div id="collapseOne" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Esta é uma plataforma social onde pessoas podem encontrar facilmente uma instituição ou uma ação social em que esteja interessado em participar.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseTwo">
									Qual o custo de participar?
							</a>
						</div>
						<div id="collapseTwo" class="collapse" data-parent="#accordion">
							<div class="card-body">
									A Páginas do Bem é uma plataforma gratuita e fica a critério do usuário a doação e a participação em instituições que solicitem alguma forma de contribuição financeira.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseThree">
							Posso participar em quantas ações?
							</a>
						</div>
						<div id="collapseThree" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Você é livre para participar em quantas ações quiser! Mas lembre-se de organizar sua agenda para não esquecer ou marcar duas ações no mesmo dia!
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
								<strong >Sou uma instituição e gostaria de divulgar
							</a>
						</div>
						<div id="collapseFour" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Estamos abertos a divulgar a sua página e/ou ação sem custo! Basta realizar um <em>cadastro</em> e criar a sua ONG.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseFive">
							Eu não tenho muitas habilidades, será que eu posso participar?
							</a>
						</div>
						<div id="collapseFive" class="collapse" data-parent="#accordion">
							<div class="card-body">
							Claro! A principal habilidade necessária é a vontade de tornar o mundo melhor. Alguns projetos, como trabalhar em um hospital, são voltados exclusivamente para estudantes de medicina ou médicos. Porém a grande maioria não é exigido nenhuma formação específica para contribuir com sua boa vontade e força de trabalho voluntário.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseSix">
							Qual a idade máxima e mínima para poder ser voluntária (o)?
							</a>
						</div>
						<div id="collapseSix" class="collapse" data-parent="#accordion">
							<div class="card-body">
							Não tem, quanto mais pessoas fazendo a diferença, melhor. Porém, menores de 18 anos só podem acompanhado dos pais ou por um responsável legal. 
							 </div>
							</div>
						</div>

					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseSeven">
							Não acho ONGs em minha cidade, como posso ser voluntária (o)?
							</a>
							</div>
					    <div id="collapseSeven" class="collapse" data-parent="#accordion">
								<div class="card-body">
								Graças à evolução tecnológica, várias ONGs oferecem atividades que podem ser realizadas à distância. 
								</div>
								</div>
							</div>
						
					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseEight">
							Ainda tenho dúvidas. Como eu faço para entrar em contato?
							</a>
							</div>
							 <div id="collapseEight" class="collapse" data-parent="#accordion">
							 <div class="card-body">
							Em dúvidas específicas, recomendamos que entre em contato diretamente com a instituição responsável. 
						   </div>
						</div>
						</div>
									

				</div>
			</div>
		</div>
	</section>

<!--  =========================== Seção Faq perguntas e respostas - (FINAL)  ==========================  -->

@endsection		