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
                <h4 id="pagina-subtitulo">Fale conosco!</h4>
            </div>
            <div class="col-sm-6 mt-3 contato-card">
                @isset($message)
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endisset
                <form class="row g-3" method="POST" action="{{ route('contato.mensagem') }}">
                    <div class="col-md-12">
                        <label for="nome" class="form-label">Nome</label>
                        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu nome">
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">E-mail</label>
                        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite o seu email">
                    </div>
                    <div class="col-12">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                        <textarea class="form-control" id="mensagem" rows="3" name="mensagem" placeholder="Escreva a sua mensagem">
                        </textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn-grad-contato">
                            Enviar Mensagem <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 contato-card align-self-center text-center" id="icone-mensagem">
                <i class="fas fa-comments-dollar fa-10x faa-float animated" style="color: blue;"></i>
            </div>
            <div class="col-sm-12" style="margin-top: 20px; margin-bottom: 30px;">
                
            </div>
            <div class="col-sm-4 mt-3 contato-card">
                <p><i class="fas fa-phone-volume fa-2x" style="color: #C8C8C8;"></i></p>
                <p class="info-01"> Falar sobre a sua Cash Carteira </p>
                <p class="info-02"> (41) 3422-2717 </p>
            </div>
            <div class="col-sm-4 mt-3 contato-card">
                <p><i class="fas fa-mobile-alt fa-2x" style="color: #C8C8C8;"></i></p>
                <p class="info-01"> Atendimento WhatsApp </p>
                <p class="info-02"> (41) 99680-1186 </p>
            </div>
            <div class="col-sm-4 mt-3 contato-card">
                <p><i class="far fa-envelope fa-2x" style="color: #C8C8C8;"></i></p>
                <p class="mail"><a href="mailto:faleconosco@ofertacash.com.br">faleconosco@ofertacash.com.br</a></p>
                <p class="info-03">Rua Arthur Bernardes, nº 453<br>83206-110<br>Paranaguá - PR</p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script>
        var pagina = document.getElementById("contato");
        pagina.classList.add("active");
    </script>
    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>
@stop