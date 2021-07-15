@extends('layouts.layout_cliente', ['pagina' => 'home'])

<link rel="stylesheet" href="{{ asset('resources/css/cliente/home.css') }}">

@section('conteudo')
    <div class="fundo">
        <div class="box">
            <div class="title">
                <h3>Saldo Disponível</h3>
                <hr>
            </div>
            <div class="title">
                <h4> <i class="fas fa-dollar-sign"></i> {{ Auth::user()->SALDO_ATUAL }}</h4>
            </div>
        </div>
        <br><br>
        <div class="box">
            <div class="title">
                <h3>Saldo Payback</h3>
                <hr>
            </div>
            <div class="title">
                <h4><i class="fas fa-dollar-sign"></i> {{ Auth::user()->saldo_payback }}</h4>
            </div>
        </div>
    </div>
@endsection