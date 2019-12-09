@extends('layouts.app')

@section('content')

<section id="busca-section" class="projeto-section">
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
        <div class="container perfil-content mb-5">
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
	</section>

@endsection
