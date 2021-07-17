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
            <div class="col-sm-12">
                <p id="info-sobre">
                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
                        do Abm Cash.
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <footer>
        <div class="fundo">
            <h2 data-aos="fade-down">The Power To Help You Succeed</h2>
            <p id="information" data-aos="fade-up">Velit laborum incididunt voluptate ea incididunt quis sed sit esse in dolor et sint esse cupidatat ex dolore ut enim do dolore consectetur in quis amet dolor sint sed nulla sit et nulla esse ad id voluptate pariatur reprehenderit dolore aliquip ut ut exercitation proident cupidatat culpa sint cupidatat velit elit commodo dolor qui irure eiusmod occaecat ad excepteur ad aliqua et duis aute in dolor enim cillum nulla id proident in irure pariatur fugiat ad eu dolor ad consequat sed incididunt adipisicing reprehenderit cupidatat sunt tempor ut mollit anim consequat magna cupidatat dolore ad sed laborum in occaecat commodo irure nulla consectetur exercitation mollit aliqua tempor ad proident laboris laborum fugiat qui voluptate dolor reprehenderit mollit excepteur et sed non labore ut aliquip ut ex id aliquip sint enim cillum nisi.</p>
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