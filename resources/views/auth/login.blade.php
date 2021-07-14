@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/home.css') }}">
<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css">

@section('content')
    
                    
    <form class="form-signin" method="POST" action="{{ url('/login') }}" style="margin-top: 70px;">

        <img class="mb-4 mx-auto d-block" src="{{ asset('resources/images/logo_ofertacash.png') }}" width="150">
        <h3 class="text-center mb-3">Login</h3>
        @if(isset($msg))
            <div class="alert alert-primary" role="alert">
                {{ $msg }}
            </div>
        @endif
        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar-me
            </label>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
    </form>

    <script>
        var login = document.getElementById("login");
        login.classList.add("active");
    </script>
@stop