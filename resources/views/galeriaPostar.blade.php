@extends('layouts.app')
@section('content')

<section class="box-cadastro">
@if(!isset($ong))
    <div class="col-12-col-md-8">
       
    </div>
@else 


    <form action="{{ url('homeOng/galeria/salvar/') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-row ">
            <div class="form-group col-md-12">
                <h4 class="text-center">Adicione suas Fotos</h4>
            </div>

        </div>

        <div class="form-group col-md-12 mt-3">
            <div >
            <input type="hidden" class="custom-file-input" id="id" name="id" value="{{$ong}}">              
            </div>
        </div>
        
        <div class="form-group col-md-12 mt-3">
            <label for="nome">Titulo da foto</label>
            <input type="text" class="form-control" id="nome" name="nome" >
        </div>
        
        <div class="form-group col-md-12 mt-3">
            <div class="custom-file mt-3">
                <input type="file" class="custom-file-input" id="imagem" name="imagem">
                <label class="custom-file-label" for="">Escolha as fotos...</label>
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
                        {{ __('Postar') }}
                    </button>
                </div>
            </div>
        </div>
</form>
        
        
@endif
        
</section>
@endsection