@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/cash.css') }}">

@section('content')
    <div class="container sobre mb-0" data-aos="fade-up-right">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <h1 id="pagina-titulo">Lojista</h1>
            </div>
            <div class="col-sm-4">
                <h4 id="pagina-subtitulo">Seja Credenciado!</h4>
            </div>
            <div class="col-sm-12 mt-3">
                <p id="info-sobre" style="font-size: 20px;">
                   Cadastre a sua loja e ofereça cashback aos seus clientes de forma simples e rápida.
                   <br>Melhore suas vendas com clientes fidelizados, faça como as grandes empresas já fazem há anos.
                </p>
            </div>
        </div>
    </div>

    <div class="container p-5 mt-0">
        <form action="{{ route('enviar.credenciamento_landing') }}" method="POST">
            <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
            <div class="form-row">
                <div class="mb-3">
                    <label for="nome_responsavel" class="form-label">Nome do Responsável</label>
                    <input type="text" class="form-control" id="nome_responsavel" name="nome_responsavel" placeholder="Digite o nome do responsável">
                </div>
                <div class="mb-3">
                    <label for="cnpj" class="form-label">CNPJ</label>
                    <input type="text" class="form-control cnpj" id="cnpj" placeholder="Digite o CNPJ" inputmode="numeric" required>
                    <div class="invalid-feedback" id="invalid-cnpj">
                        CNPJ Inválido
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ddd" class="form-label">DDD</label>
                    <input type="text" name="ddd" id="ddd" required maxlength="2"  min="0" max="9999" step="1" pattern="[0-9]{2}" placeholder="Digite o DDD" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="ddd" class="form-label">Telefone/Celular</label>
                    <input type="text" name="celular" id="celular" placeholder="Digite o número do Telefone/Celular" class="form-control phone">
                </div>
                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite o seu e-mail">
                    <small id="emailHelp" class="form-text text-muted">Nós nunca iremos compartilhar o seu e-mail com alguém.</small>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="termos" required>
                    <label class="form-check-label" for="exampleCheck1">
                        Concordo com os Termos do Contrato que regem essa operação: Ao se cadastrar, você aceita os
                        <a href="#">
                            Termos e condições de uso e a Politica de Privacidade
                        </a>
                        da OfertaCash.
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
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
        var lojista = document.getElementById("lojista");
        lojista.classList.add("active");

        $(document).ready(function(){
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.phone').mask('0000-0000');
        });
    </script>
    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>
@stop