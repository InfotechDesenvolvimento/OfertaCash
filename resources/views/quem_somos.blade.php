@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/quem-somos.css') }}">

@section('content')
    <div class="container sobre" data-aos="fade-up-right">
        <div class="row">
            <div class="col-sm-12">
                <h1 id="quem-somos-titulo">Quem Somos</h1>
            </div>
            <div class="col-sm-12" style="font-size: 20px;">
                <p id="info-sobre">
                    Aliamos 15 anos de desenvolvimento de soluções de tecnologia da informação com 30 anos de experiência de mercado financeiro alinhados com o que há de mais moderno na tecnologia, e nas soluções financeiras digitais às empresas e seus clientes.
                </p>
                <p id="info-sobre">
                    As MEI, ME e EPPs podem contar com uma ferramenta simples e prática de cashback (gerenciamento de recompensas próprias e de parceiros).
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="fundo">
            <h2 data-aos="fade-down">Oferta Cash -  Soluções Financeiras e Comerciais</h2>
            <p id="information" data-aos="fade-up">Somos a primeira plataforma de cashback do país a integrar num só local:
                <br>gestão de benefícios, gestão de recompensas próprias e de terceiros, banco digital,
                <br>conta digital, soluções de crédito para empresas e seus clientes.</p>
        </div>
    </footer>

    <div class="credits">
        <p class="text-center">OfertaCash 2021</p>
    </div>

    <script>
        var sobre = document.getElementById("sobre");
        sobre.classList.add("active");
    </script>
@stop