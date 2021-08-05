@extends('layouts.layout_cliente', ['pagina' => 'home'])

<link rel="stylesheet" href="{{ asset('resources/css/cliente/home.css') }}">
@section('content')
    <style type="text/css">
        #inicio_cliente {
            color: var(--white-color);
        }

        #inicio_cliente::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }
    </style>
    <h2 id="dashboard" style="margin-top: 80px;">Dashboard</h2>
    <hr>
    <div class="d-flex">
        <div class="container shadow-lg dashboard rounded m-3 flex-wrap">
            <div class="row" style="padding: 10px;">
                <div class="col-sm-6 simbolo rounded-circle" style="background-color: #02CA95;">
                    <i class="fas fa-dollar-sign fa-3x simbolo-fa"></i>
                </div>
                <div class="col-sm-6" id="card01">
                    <h3 class="subtitulo-dashboard">Saldo Disponível</h3>
                    <h2 class="valor-dashboard" id="saldo-atual">
                        $ 
                        <?php 
                            echo number_format((float)Auth::user()->SALDO_ATUAL, 2, '.', ''); 
                        ?>
                    </h2>
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
                    <h2 class="valor-dashboard" id="saldo-payback">
                        $ 
                        <?php 
                            echo number_format((float)Auth::user()->SALDO_VALE, 2, '.', ''); 
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection