@extends('layouts.app')

@section('content')
<section class="box-login">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group col-md-12 text-center">
                    <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
                </div>
                <div class="form-group col-md-12">
                    <h4 class="text-center">Login</h4>
            </div>

            <div class="col-12 text-center mt-3">
                {{-- <label for="email" class="">{{ __('E-Mail') }}</label> --}}
                <div class="col-12 mt-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="" role="alert">
                        <strong class="mt-2">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-12 text-center mt-3">
               {{--  <label for="password" class="">{{ __('Senha') }}</label> --}}
                <div class="col-12 mt-3 text-center">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="current-password">
                    @error('password')
                    <span class="" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mt-4">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="" for="remember">
                        {{ __('Lembrar senha') }}
                    </label>
                </div>
            <div class="col-12 mb-2">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
            <div class="col-12 mb-2">
                <div class="col-12">
                    <a class="btn btn-warning btn-block" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                </div>
            </div>
            <div class="col-12 text-center mt-2">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </div>    

        </form>
</section>
@endsection
