@extends('layouts.app')

@section('content')
<div class="container">

                <div class="box-editar">




                    <form action="/home/perfil-atualizar/{{ Auth::user()->id }}" enctype="multipart/form-data" method="post" >
                         @csrf
                         {{ method_field('PUT') }}
                         <div class="form-group col-md-12 text-center mt-4">
                            <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
                        </div>
                        <div class="form-group col-md-12">
                            <h4 class="text-center">Atualize seus dados.</h4>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="form-row">
                                <div class="col-12 col-md-6" >
                                    <label for="nome" >Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="{{ Auth::user()->name  }}"  required  autofocus>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{  Auth::user()->email }}"  required >
                                </div>
                            </div>
                        </div>
                        @error('nome')
                            <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                <strong> {{ $message }}.</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                        @error('email')
                            <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                <strong> {{ $message }}.</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                        <div class="form-group col-md-12">
                            <div class="form-row">
                                <div class="col-12 col-md-6">
                                    <label for="occupation">Ocupação:</label>
                                    <input type="text" class="form-control" id="ocupacao" name="ocupacao" value="{{  Auth::user()->occupation }}" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="areas">Áreas de interesses:</label>
                                    <input type="text" class="form-control" id="areas" name="areas" value="{{ Auth::user()->areas  }}" >
                                </div>

                                @error('ocupacao')

                                <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <strong> {{ $message }}.</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>

                                @enderror

                                @error('areas')

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
                                <div class="col-12 col-md-4">
                                    <label>CEP:</label>
                                    <input type="text" class="form-control" id="CEP" name="CEP" placeholder="00000-000" required>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label>Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" value="{{  Auth::user()->district }}" readonly>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label>Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{  Auth::user()->city }}" readonly>
                                </div>
                                <div class="form-group col-md-2">

                                    <input type="hidden" class="form-control" id="uf" name="uf" readonly required>
                                </div>
                                <div class="form-group col-md-8">

                                    <input type="hidden" class="form-control" id="endereco" name="endereco" readonly required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="form-row">
                                <div class="col-12">
                                    <label for="biography">Biografia:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="biografia" rows="3">{{  Auth::user()->biography }}</textarea>
                                    @error('biografia')

                                    <div class="col-12 alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                            <strong> {{ $message }}.</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>

                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-12 mt-3">
                            <div class="custom-file mt-3">
                                <input type="file" class="custom-file-input" id="imagem" name="imagem">
                                <label class="custom-file-label" for="">Escolha uma foto...</label>
                            </div>
                        </div>
                            <div class="form-row mb-4">
                                <div class="text-center preview-text "style="">
                                    <h6 >Pré-Visualização</h6>
                                </div>
                                <div class="preview-img d-flex justify-content-center">
                                   <div>
                                       <img src="{{url('images/preview-default.png')}}" alt="" title="Pré-Visualização"  class="preview-img-avatar" id="preview">
                                   </div>

                                </div>
                            </div>
                        <div class="form-group col-md-12 mt-5">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Atualizar') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 mt-5">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}

                                </div>
                            @endif
                        </div>


                    </form>
                </div>

</div>



@endsection
