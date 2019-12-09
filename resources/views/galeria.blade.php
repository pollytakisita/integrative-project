@extends('layouts.app')
@section('content')


<!--  =========================== Seção Home Galeria - (INÍCIO)  ==========================  -->

<section class="home">
    <div class="overlay"></div>
    <div class="home-cover text-center" data-stellar-background-ratio="1" style="background-image: url(images/photo-dog.jpeg);background-size: cover; background-repeat: no-repeat;"">
        <a href="#galeria" target="" class="">
            <div class=" desc ">
                <h2> <strong>Galeria de imagens</strong></h2>

            </div>
        </a>
    </div>
</section>
<!--  =========================== Seção Home Galeria - (FINAL)  ==========================  -->

<!--  ===================== Seção Galeria de fotos da Ongs - (INÍCIO)  ====================  -->

<section id="galeria" class="galeria-section  mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-md-offset-12 text-center heading-section ">
                <h3>Galeria de Fotos</h3>
                <p>Galeria que vale mil palavras</p>
            </div>
        </div>



@if($fotos->isEmpty()  )


        <div class="row">
            <div class="col-12 box-img-galeria">
                <div class="img-galeria box-img-animate ">
                    <a href="{{asset("images/photo_01.jpeg")}}" class="galeria" data-lightbox="photos" title="Voluntariado">
                        <img src="{{asset("images/photo_01.jpeg")}}" alt="">
                    </a>
                </div>
                <div class="img-galeria box-img-animate">
                    <a href="{{asset("images/photo-amazonia.jpeg")}}" class="galeria" data-lightbox="photos" title="Desmatamento">
                        <img src="{{asset("images/photo-amazonia.jpeg")}}" alt="">
                    </a>
                </div>
                <div class="img-galeria box-img-animate">
                    <a href="{{asset("images/photo-volunteer.jpg")}}" class="galeria" data-lightbox="photos" title="Doação">
                        <img src="{{asset("images/photo-volunteer.jpg")}}" alt="">
                    </a>
                </div>
            </div>
        </div>
@else

<div class="row">
        <div class="col-12 box-img-galeria">

            @foreach ($fotos as $foto)

            <div class="img-galeria box-img-animate ">
                <a href="{{url($foto->image)}}" class="galeria" data-lightbox="photos">
                <img src="{{url($foto->image)}}" title="{{$foto->name}}" alt="">
                </a>
            </div>
            @endforeach

        </div>
    </div>








      <!--  <div class="bgbox">
        <div class="img-modal-box">
                <button>X</button>
            <img src="" alt="" width="100%">

        </div>
    </div>
        <script defer>
            $(function(){
                $('a.galeria').bind('click', function(){
                    var img = $(this).find('img').attr('src')
                    $('.img-modal-box img').attr('src', img)
                    $('.bgbox, .img-modal-box').fadeIn('fast')
                })
                $('.bgbox, img-modal-box button').bind('click', function(){
                    $('.bgbox, .img-modal-box').fadeOut('fast')


                })
            })

        </script> -->

        <!--  ===================== Seção Galeria de fotos da Ongs - (INÍCIO)  ====================  -->


        <!--  ===================== Botao seja voluntário - (INÍCIO)  ====================  -->
       {{--  <div class="row botao-voluntario">
            <div class="col-md-12 col-md-12 text-center ">
                <a href="#" class="btn btn-success btn-lg">Seja um Voluntário</a>
            </div>
        </div> --}}

        <!--  ===================== Botao seja voluntário - (FINAL)  ====================  -->
        @endif
    </div>
</section>





@endsection



