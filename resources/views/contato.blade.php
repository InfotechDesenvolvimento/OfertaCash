@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/contato.css') }}">

@section('content')
    <div class="container sobre mb-0" data-aos="fade-up-right">
        <div class="row align-items-top">
            <div class="col-sm-8">
                <h1 id="pagina-titulo"> Contato </h1>
            </div>
            <div class="col-sm-4">
                <h4 id="pagina-subtitulo">Abra a sua conta!</h4>
            </div>
            <div class="col-sm-4 mt-3 contato-card">
                <p class="info-01"> Falar sobre sobre sua a Conta </p>
                <p class="info-02"> (41) 3422-2717 </p>
            </div>
            <div class="col-sm-4 mt-3 contato-card">
                <p class="info-01"> Atendimento WhatsApp </p>
                <p class="info-02"> (41) 99680-1186 </p>
            </div>
            <div class="col-sm-4 mt-3 contato-card">
                <p class="mail"><a href="mailto:faleconosco@ofertacash.com.br">faleconosco@ofertacash.com.br</a></p>
                <p class="info-03">Rua Arthur Bernardes, Nº 453<br>Paranaguá - PR</p>
            </div>
        </div>
    </div>

    <footer style="margin-top: 70px;">
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
        var pagina = document.getElementById("contato");
        pagina.classList.add("active");
    </script>
    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>
@stop