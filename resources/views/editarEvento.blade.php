@extends('layouts.app')
@section('content')

<section class="box-cadastro-evento">
<form action="{{url('evento-atualizar')}}/{{$evento->id}}" enctype="multipart/form-data" method="post">
        @csrf{{ method_field('PUT') }}
        <div class="form-group col-md-12 text-center">
            <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
        </div>
        <div class="form-group col-md-12">
            <h4 class="text-center">Atualize o Evento!</h4>
        </div>


        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="nome">Nome do Evento</label>
                <input type="text" class="form-control" id="titulo" name="nome"  value="{{$evento->title}}">
            </div>
            <div class="form-group col-md-3">
                <label for="date">Data do evento</label>
                <input type="date" class="form-control" id="data" name="data"  value="{{$evento->date}}">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" placeholder="max 500 caracteres ...">{{$evento->description}}</textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="nome">CEP</label>
                <input type="text" class="form-control" id="CEP" name="CEP">
            </div>
            <div class="form-group col-md-8">
                <label for="nome">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco"  value="{{$evento->address}}" readonly>
            </div>
        </div>
        <div class="form-row ">
            <div class="form-group col-md-5">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro"  value="{{$evento->district}}" readonly>
            </div>
            <div class="form-group col-md-5">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade"  value="{{$evento->city}}" readonly>
            </div>
            <div class="form-group col-md-2">
                <label for="uf">Estado</label>
                <input type="text" class="form-control" id="uf" name="uf" value="{{$evento->uf}}" readonly>
            </div>
        </div>


        <div class="form-group col-md-12 mt-3">
                <div class="custom-file mt-3">
                    <input type="file" class="custom-file-input" id="imagem" name="imagem">
                    <label class="custom-file-label" for="">Escolha uma foto...</label>
                </div>
            </div>
        <div class="form-row mb-4 d-flex justify-content-center">
            <div class="text-center preview-text "style="">
                <h6 >Pré-Visualização</h6>
            </div>
            <div class="preview-event-img d-flex justify-content-center">
               <div>
                   <img src="{{url('images/preview-default.png')}}" alt="" title="Pré-Visualização" class="preview-img-event" id="preview">
               </div>

            </div>
        </div>

        <div class="form-row ">
            <div class="form-group col-12  ">
                <button type="submit" class="btn btn-success btn-lg btn-block">Atualizar</button>
            </div>
        </div>




    </form>



</section>


@endsection
