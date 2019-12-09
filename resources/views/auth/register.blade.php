@extends('layouts.app')

@section('content')
<section class="box-cadastro">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group col-md-12 text-center">
            <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
        </div>
        <div class="form-group col-md-12">
            <h4 class="text-center">Cadastre-se</h4>
        </div>

        <div class="">
            {{-- <label for="name" class="col-md-12 col-form-label text-md-center">{{ __('Nome') }}</label> --}}

            <div class="col-md-12 mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="">
            {{-- <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('E-Mail') }}</label> --}}

            <div class="col-md-12 mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="">
            {{-- <label for="password" class="col-md-12 col-form-label text-md-center">{{ __('Senha') }}</label> --}}

            <div class="col-md-12 mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="">
            {{-- <label for="password-confirm" class="col-md-12 col-form-label text-md-center">{{ __('Confirme a senha') }}</label> --}}

            <div class="col-md-12 mb-3">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha" required autocomplete="new-password">
            </div>
        </div>

        <div class=" mt-3">
            <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Cadastrar') }}
                </button>


            </div>
            <div class="col-md-12 mb-3">
                    <a href="login" class="btn btn-secondary btn-block">
                        {{ __('Já tenho Login') }}
                    </a>
    
                    
            </div>
        </div>
    </form>
</div>
@endsection
