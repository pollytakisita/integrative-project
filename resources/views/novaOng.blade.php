@extends('layouts.app')
@section('content')

<section class="box-cadastro-ong">
<form action="ong-salvar/{{ Auth::user()->id }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group col-md-12 text-center">
                <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
            </div>
            <div class="form-group col-md-12">
                    <h4 class="text-center">Crie uma ONG</h4>
            </div>

        <div class="form-row">
               {{--  <div class="form-group col-md-8">
                <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                </div> --}}
            <div class="form-group col-12 col-md-12">
                <label for="nome">Nome da ONG</label>
                <input type="text" class="form-control" id="nome" name="nome"  required>
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
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            @error('email')
                <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <strong> {{ $message }}.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <div class="form-group col-12 col-md-6 mb-3">
                {{-- <input type="text" class="form-control" id="segmento" name="segmento" placeholder="Segmento" required> --}}

                <label for="segmento">Segmento</label>
                <select class="form-control" id="segmento" name="segmento" value="">
                    <option selected>...</option>
                  @foreach ($segmentos as $segmento)
                 <option >{{$segmento->name}}</option>
                  @endforeach
                </select>



            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" placeholder="max 500 caracteres ..."  required ></textarea>
            </div>
            @error('descricao')
            <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <strong> {{ $message }}.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
            <div class="form-group col-md-4">
                <label for="CEP">CEP</label>
                <input type="text" class="form-control" id="CEP" name="CEP" placeholder="00000-000" required>
            </div>
            <div class="form-group col-md-8">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" readonly required>
            </div>
            @error('address')
            <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <strong> {{ $message }}.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
        </div>

        <div class="form-row ">
            <div class="form-group col-md-5">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" readonly required>
            </div>

            <div class="form-group col-md-5">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" readonly required>
            </div>

            <div class="form-group col-md-2">
                <label for="uf">Estado</label>
                <input type="text" class="form-control" id="uf" name="uf" readonly required>
            </div>

        </div>
        <div class="form-row ">
                <div class="form-group col-md-12 mt-3">
                        <div class="custom-file mt-3">
                            <input type="file" class="custom-file-input" id="imagem" name="imagem">
                            <label class="custom-file-label" for="">Escolha uma foto...</label>
                        </div>
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

        <div class="form-row ">
            <div class="form-group col-12  ">
                <button type="submit" class="btn btn-success btn-lg btn-block">Gravar</button>
            </div>


        </div>
    </form>



</section>


@endsection
