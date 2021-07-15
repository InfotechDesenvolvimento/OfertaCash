@extends('layouts.layout_cliente', ['pagina' => 'home'])

<link rel="stylesheet" href="{{ asset('resources/css/cliente/home.css') }}">

@section('content')
    <h2 id="dashboard" style="margin-top: 80px;">Dashboard</h2>
    <hr>

<!--     <div class="container shadow-lg dashboard rounded mt-5" id="container">
        <div class="row" style="padding: 10px;">
            <div class="col-2 simbolo rounded-circle" style="background-color: #02CA95;">
                <i class="fas fa-dollar-sign fa-3x simbolo-fa"></i>
            </div>
            <div class="col-4" id="card01">
                <h3 class="subtitulo-dashboard">Saldo Disponível</h3>
                <h2 class="valor-dashboard" id="saldo-atual">$ {{ Auth::user()->SALDO_ATUAL }}</h2>
            </div>
        </div>
    </div>

    <div class="container shadow-lg dashboard rounded" id="container">
        <div class="row" style="padding: 10px;">
            <div class="col-2 simbolo rounded-circle card02" style="background-color: #9877DC;">
                <i class="fas fa-hand-holding-usd fa-3x simbolo-fa"></i>
            </div>
            <div class="col-4 card03">
                <h3 class="subtitulo-dashboard">Saldo Payback</h3>
                <h2 class="valor-dashboard" id="saldo-payback">$ {{ Auth::user()->saldo_payback }}</h2>
            </div>
        </div>
    </div> -->

    <div class="d-flex">

        <div class="container shadow-lg dashboard rounded m-3 flex-wrap">
            <div class="row" style="padding: 10px;">
                <div class="col-6 simbolo rounded-circle" style="background-color: #02CA95;">
                    <i class="fas fa-dollar-sign fa-3x simbolo-fa"></i>
                </div>
                <div class="col-6" id="card01">
                    <h3 class="subtitulo-dashboard">Saldo Disponível</h3>
                    <h2 class="valor-dashboard" id="saldo-atual">$ {{ Auth::user()->SALDO_ATUAL }}</h2>
                </div>
            </div>
        </div>

        <div class="container shadow-lg dashboard rounded m-3">
            <div class="row" style="padding: 10px;">
                <div class="col-6 simbolo rounded-circle card02" style="background-color: #9877DC;">
                    <i class="fas fa-hand-holding-usd fa-3x simbolo-fa"></i>
                </div>
                <div class="col-6 card03">
                    <h3 class="subtitulo-dashboard">Saldo Payback</h3>
                    <h2 class="valor-dashboard" id="saldo-payback">$ {{ Auth::user()->saldo_payback }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection