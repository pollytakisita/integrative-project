@extends('layouts.app')
@section('content')

<!--  =========================== Seção formulário de contato -  (INÍCIO)  ==========================  -->
<section>
		<div id="contato" class="">
			<div class="container box-contato">
				<form action="#">
					<div class="titulo">
						<div class="col-md-8 ">
							<h3 class="section-title text-center">Fale Conosco!</h3>
							<p class="text-center">Temos uma comunicação aberta a todos que queiram entrar em contato. Envie sua mensagem a nós e responderemos o quanto antes!</p>
							
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nome">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Mensagem"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Enviar" class="btn btn-primary">
									</div>
								</div>
								<ul class="contato-info">
								<li><i class="fas fa-map-marker-alt"></i>Av. Dr. Cardoso de Melo, 90 - Vila Olímpia São Paulo - SP</li>
								<!-- <li><i class="icon-phone2"></i>+ 1235 2355 98</li> -->
								<li><i class="fas fa-envelope"></i><a href="#">paginasdobem@contato.com</a></li>
								<!-- <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li> -->
							</ul>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>	

<!--  =========================== Seção formulário de contato -  (INÍCIO)  ==========================  -->

<!--  =========================== Seção mapa -  (INÍCIO)  ==========================  -->

	<section class="container map">
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Av%20Doutor%20Cardoso%20de%20Melo%2C%2090&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
		</div>
	</section>

<!--  =========================== Seção mapa -  (INÍCIO)  ==========================  -->

@endsection	