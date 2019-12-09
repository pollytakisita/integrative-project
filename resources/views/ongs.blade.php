@extends('layouts.app')
@section('content')

<!--  =========================== Seção Ações -  (INÍCIO)  ==========================  -->
<section class="home">
		<div class="overlay"></div>
		<div class="home-cover text-center" data-stellar-background-ratio="1" style="background-image: url(images/photo_caridade.jpg);">
            <a href="#titulo" target="" class="" title="ONGs">
                <div class="desc ">
                    <h2><strong>ONGs</strong></h2>
                    <span>Inspirando você a fazer o bem</span>
                        <!-- <span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span> -->
                </div>
            </a>
		</div>
</section>
<section id="noticia" class="projeto-section">
@if($ongs->isEmpty())
    <div class="container">
        <div class="titulo">
            <div class="col-md-12 col-md-offset-12 text-center heading-section ">
                <h3>Desculpe! Não temos ONGs para serem listadas.</h3>
            </div>
        </div>
    </div>
    <div class="container">
@else
    <div class="container">
            <div class="titulo" id="titulo">
                <div class="col-md-12 col-md-offset-12 text-center heading-section ">
                    <h3>Conheça as ONGs e Instituições Participantes.</h3>
                </div>
            </div>
        </div>
        <div class="container">

        <div class="row row-bottom-padded-md  ">

            @foreach ($ongs as $ong)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="noticia box-img-animate">
                @if($ong->avatar)
                    <a href="{{url('homeOng/'.$ong->id)}}"><img class="img-responsive" src="{{url($ong->avatar)}}" title="{{$ong->name}}" alt="" width="250" height="200">
                @else
                    <a href="{{url('homeOng/'.$ong->id)}}"><img class="img-responsive" src="{{url('images/avatar-ong-default.png')}}" title="{{$ong->name}}" alt="" width="250" height="240">
                @endif
                    </a>
                    <a href="{{url('homeOng/'.$ong->id)}}">
                        <div class="noticia-text">
                            <div class="noticia-title">
                                <h3>{{$ong->name}}</h3>
                                <p>{{$ong->description}}</p>
                            </div>
                            <div class="mt-2 text-center ">
                                <p> Saber mais...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endif
</section>
<!--  =========================== Seção Ações -  (FINAL)  ==========================  -->

@endsection
