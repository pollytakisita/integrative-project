@extends('layouts.app')

@section('content')
<div class="box-cadastro-ong">
    <div class="box-editar">
        <form action="/homeOng/perfil-ong-atualizar/{{$ong->id}}" enctype="multipart/form-data" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group col-md-12 text-center mt-4">
                <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
            </div>
            <div class="form-group col-md-12">
                <h4 class="text-center">Atualize os dados da sua ONG</h4>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">


                        <input id="id" type="hidden" class="form-control-sm form-control" id="id" name="id" value="{{Auth::user()->id}}" >

                    <div class="col-12 col-md-12" >
                        <label for="name" >Nome da ONG:</label>
                        <input id="name" type="text" class="form-control-sm form-control" id="nome" name="nome" value="{{$ong->name}}"  required  autofocus>
                    </div>
                    @error('nome')
                            <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                <strong> {{ $message }}.</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    <div class="col-12 col-md-6">
                        <label for="bairro">Email</label>
                        <input type="email" class="form-control-sm form-control" id="email" name="email" value="{{$ong->email}}" >
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="segmento">Segmento</label>
                        <select  class="form-control-sm form-control" id="segmento" name="segmento" value="">
                            <option selected>{{$ong->segment}}</option>
                            @foreach ($segmentos as $segmento)
                            <option >{{$segmento->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control-sm form-control" id="descricao" name="descricao" placeholder="max 500 caracteres ...">{{$ong->description}}</textarea>
                    </div>
                    @error('descricao')
                        <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                            <strong> {{ $message }}.</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control-sm form-control" id="telefone" name="phone1" placeholder="(xx)xxxx-xxxx" value="{{$ong->phone1}}" >
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="Celular">Celular</label>
                        <input type="text" class="form-control-sm form-control" id="celular" name="phone2" placeholder="(xx)xxxxx-xxxx" value="{{$ong->phone2}}" >
                    </div>
                </div>
            </div>

            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="col-12 col-md-4">
                        <label for="CEP">CEP:</label>
                        <input type="text" class="form-control-sm form-control" id="CEP" name="CEP">
                    </div>
                    <div class="col-12 col-md-8">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control-sm form-control" id="endereco" name="endereco" value="{{$ong->address}}" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="col-12 col-md-5 mt-2">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control-sm form-control" id="bairro" name="bairro" value="{{$ong->district}}" readonly>
                    </div>
                    <div class="col-12 col-md-5 mt-2">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control-sm form-control" id="cidade" name="cidade" value="{{$ong->city}}" readonly>
                    </div>
                    <div class="col-12 col-md-2 mt-2">
                        <label for="uf">Estado</label>
                        <input type="text" class="form-control-sm form-control" id="uf" name="uf" value="{{$ong->uf}}" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <label for="site1">Site 1</label>
                        <input type="text" class="form-control-sm form-control" id="site1" name="site1" value="{{$ong->website1}}">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="site2">Site 2</label>
                        <input type="text" class="form-control-sm form-control" id="site2" name="site2" value="{{$ong->website2}}">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <label for="site3">Site 3</label>
                        <input type="text" class="form-control-sm form-control" id="site3" name="site3" value="{{$ong->website3}}" >
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="site4">Site 4</label>
                        <input type="text" class="form-control-sm form-control" id="site4" name="site4" value="{{$ong->website4}}" >
                    </div>
                </div>
            </div>

            <div class="form-group col-md-12 mt-3">
                <div class="custom-file mt-3">
                    <input type="file" class="custom-file-input"  id="imagem" name="imagem">
                    <label class="custom-file-label " for="">Escolha uma foto...</label>
                </div>
            </div>
            <div class="form-row mb-4">
                    <div class="text-center preview-text "style="">
                        <h6 >Pré-Visualização</h6>
                    </div>
                    <div class="preview-img d-flex justify-content-center">
                       <div>
                           <img src="{{url('images/preview-default.png')}}" alt="" title="Pré-Visualização" class="preview-img-avatar" id="preview">
                       </div>

                    </div>
                </div>
            <div class="form-group col-md-12 mt-5" >
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Atualizar') }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif
                </div>
            </div>
        </div>
</div>



@endsection
