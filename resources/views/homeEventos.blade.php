@extends('layouts.app')

@section('content')






<div class="col-md-12">
    <div class="card">

            <section class="container perfil-user box-event">
                    @if (session('sucess'))

                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            <strong>  {{ session('sucess') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    @endif
                    @if (session('eventoCriado'))
                    <div class="alert alert-success alert-dismissible fade show mt-1 ml-4 ml-4 mr-4" role="alert">
                    <strong>{{session('eventoCriado')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class=" box-perfil ">
                    <div class="container emp-profile box-perfil-event">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center ">
                                <div class="profile-event-img text-center">
                                    <a href="">
                                        @if (($evento->image) == NULL)
                                        <img src="{{url('images/avatar-ong-default.png')}}" title="{{$evento->title}}" >
                                        @else
                                        <img src="{{url($evento->image)}}" alt="" title="{{$evento->title}}">
                                        @endif


                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="profile-event-box text-center">
                                    <span><h3>{{$evento->title}}</h3></span>
                                        <div class="event-description ">
                                            <p><span>{{$evento->description}}</span></p>
                                        </div>
                                        <p> <span><i class="fas fa-map-marker-alt icone-perfil mt-3"></i>{{$evento->address}}</span>
                                            <span>{{$evento->district}} </span><span>{{$evento->city}} </span>
                                        </p>
                                        <p><span><i class="fas fa-calendar-alt icone-perfil mt-3"></i>{{ ($evento->date) ? $evento->date->format('d/m/Y') : ''}}</span></p>

                                        <div class="col-12 mt-3 d-flex justify-content-center align-items-center">
                                            <div class="text-center col-md-4">
                                                <p>Organizado por: <a href="{{url('homeOng')}}/{{$ong->id}}" class="badge badge-secondary">{{$ong->name}}</a></p>

                                            </div>
                                        </div>

                                        @if(!$evento->users->isEmpty())
                                        @foreach($evento->users as $item)
                                            @if($item->pivot->id_user == Auth::user()->id)
                                                {{ $participante = 'Você selecionou este evento para participar.'}}
                                                <form class="mt-3" action="{{url('evento/cancelar/participacao')}}" method="post">
                                                    @csrf {{method_field('DELETE')}}
                                                    <input type="hidden" name="idEvento" value="{{$evento->id}}">
                                                    <input type="hidden" name="idUser" value="{{Auth::user()->id}}">

                                                    <button class="btn btn-danger mb-4" type="submit" >Não participar</button>
                                                </form>
                                            @break
                                            @endif
                                        @endforeach
                                        @endif
                                        @if(!isset($participante))
                                            <p class=""><a href="{{url('evento/'.$evento->id.'/confirmar/')}}/{{Auth::user()->id}}" class="btn btn-info">Participar</a></p>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center d-flex justify-content-center mb-3 mt-1">
                        @if(isset($total))
                            <div class=" d-flex justify-content-center align-items-center">
                                Participante(s):
                                <div id="participantes" class="d-flex justify-content-center align-items-center ml-1 mr-4">
                                    {{$total}}
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="{{url('/home')}}" class="btn-editar form-control">Meu perfil</a>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
    </div>
</div>


@endsection
