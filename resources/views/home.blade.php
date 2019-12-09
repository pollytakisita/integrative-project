@extends('layouts.app')

@section('content')


<div class="">
    <div class="col-md-12 perfil-content">
        <div class="card pt-5">
            @if (session('ong'))
                <div class="alert alert-danger alert-dismissible fade show mt-1 ml-4 ml-4 mr-4" role="alert">
                    <strong>Você já possui um Ong cadastrada.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('semOng'))
                <div class="alert alert-warning alert-dismissible fade show mt-1 ml-4 ml-4 mr-4" role="alert">
                    <strong> {{ session('semOng') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
             @endif

             @if (session('excluiu'))
             <div class="alert alert-warning alert-dismissible fade show mt-1 ml-4 ml-4 mr-4" role="alert">
                 <strong> {{ session('excluiu') }}</strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
             </div>
            @endif
               {{--  <div class="alert alert-success alert-dismissible fade show mt-4 ml-4 ml-4 mr-4" role="alert">
                    Sua <strong>Ong </strong> foi criada com sucesso !.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> --}}

            <section class="container-fluid perfil-user">
                <div class=" box-perfil">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="profile-img text-center">
                                <a href="#">
                                    @if(Auth::user()->avatar == NULL)
                                        <img src="{{url('images/avatar-default.png')}}" alt="" title="Adicione uma foto">
                                    @else
                                        <img src="{{url(Auth::user()->avatar)}}" alt="" title=" {{ Auth::user()->name }}">
                                    @endif
                                </a>
                            </div>
                            <div class="container-fluid perfil-user d-flex flex-wrap justify-content-center">

                                    <p class="mr-3"><a href="{{url('home/perfil-editar')}}" class="btn-editar form-control ">Alterar Perfil</a></p>
                                    <p><a href="{{url('home/ong-criar')}}" class="btn-editar form-control">Criar Ong</a></p>

                            </div>
                        </div>
                        <div class="col-md-8 row">
                            <div class="text-left col-md-12 d-flex flex-wrap justify-content-around align-items-center ">
                                <p class="mt-1 mr-3">
                                    <i class="far fa-user icone-perfil"></i>
                                     {{ Auth::user()->name }} </p>

                                <p class="mt-1 mr-3">
                                    <i class="fa fa-briefcase icone-perfil"></i>
                                    @if (Auth::user()->occupation == NULL)
                                    Adicione sua profissão
                                    @else
                                    {{ Auth::user()->occupation }} </p>
                                    @endif

                                <p class="mt-1 mr-3">
                                    <i class="far fa-envelope icone-perfil"></i>
                                    {{ Auth::user()->email }} </p>

                                <p class="mt-1 mr-3">
                                        <i class="fas fa-map-signs icone-perfil"></i>

                                @if (Auth::user()->district == NULL)
                                    Meu bairro</p>
                                @else
                                {{ Auth::user()->district }}</p>
                                @endif

                                <p class="mt-1 mr-3">
                                    <i class="fas fa-map-marked-alt icone-perfil"></i>


                                @if (Auth::user()->city == NULL)
                                    Minha cidade</p>
                                @else
                                    {{ Auth::user()->city }}</p>
                                @endif
                            </div>
                            <div class="text-left col-md-12 d-flex flex-wrap justify-content-around align-items-center">




                                <p class="mt-1 mr-3">
                                   <i class="fa fa-pencil icone-perfil"></i>
                                   {{ Auth::user()->biography }}</p>
                                @if (Auth::user()->areas == NULL)

                                        Causas: Adicione a causa de seu interesse</p>
                                @else
                                    <p class="mt-1 mr-3">
                                            <i class="fa fa-sign-language icone-perfil"></i>
                                        Causas: {{ Auth::user()->areas }}</p>
                                @endif
                            </div>


                            <form>
                                <input id="id-perfil" type="hidden" value="{{Auth::user()->id}}">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fluid">
                <div class="row">
                        <div class="col-12 col-md-4 d-flex align-items-start justify-content-center mt-3 mb-3">
                            <div class="col-12 col-sm-8 col-md-10 d-flex justify-content-center  mt-3">
                                <div class="card text-center " id="card" style=" display:none; ">

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-12 mt-3 text-center" >
                                <h3 id="card-evento-title" style="display:none;">Eventos</h3>
                            </div>
                            <div class="col-12 mb-3 card-evento" id="card-evento" >

                            </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-md-12 mt-3 text-center mt-4 " >
                            <h3  id="ong-follow-title" style="display:none;">ONGs que eu acompanho.</h3>
                        </div>
                            <div class="col-12 mt-3">
                                <div class="col-12">
                                <table id="tabela-acompanho" class="table table-striped table-responsive-sm my-ongs" style="display:none;">
                                    <thead>
                                        <tr >
                                            <th class="text-center" width=""></th>
                                            <th class="text-center" width="25%">Nome</th>
                                            <th class="text-center" width="100%">Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>



            </section>



        </div>
    </div>
</div>
@endsection
