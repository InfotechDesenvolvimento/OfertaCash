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

    <div class="container">
        @if(isset($success))
            <div class="alert alert-success" role="alert">
              {{ $success }}
            </div>
        @endif

        @if(isset($error))
            <div class="alert alert-success" role="alert">
              {{ $error }}
            </div>
        @endif

        <form action="{{ route('enviar.credenciamento_landing') }}" method="POST">
            <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="nome_responsavel" class="form-label">Nome da Empresa (Razão Social)</label>
                    <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Digite o nome da empresa (razão social)" required>
                </div>
                <div class="col-sm-4 mb-3">
                    <label for="cnpj" class="form-label">CNPJ</label>
                    <input type="text" class="form-control cnpj" id="cnpj" placeholder="Digite o CNPJ" name="cnpj" inputmode="numeric" required>
                    <div class="invalid-feedback" id="invalid-cnpj">
                        CNPJ Inválido
                    </div>
                </div>
                <div class="col-sm-2 mb-3 align-self-end">
                    <button type="button" class="btn btn-secondary" id="buscarCNPJ" style="width: 100%;">Pesquisar</button>
                </div>
                <div class="col-sm-5 mb-3">
                    <label for="nome_responsavel" class="form-label">Nome do Responsável</label>
                    <input type="text" class="form-control" id="nome_responsavel" name="nome_responsavel" placeholder="Digite o nome do responsável" required>
                </div>
                <div class="col-sm-3 mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select class="form-control" id="categoria" name="categoria" required>
                        <option selected disabled>Escolha uma opção</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->RAMO_ATIVIDADE }}">
                             {{ $categoria->RAMO_ATIVIDADE }} 
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-1 mb-3">
                    <label for="ddd" class="form-label">DDD</label>
                    <input type="text" name="ddd" id="ddd" required maxlength="2"  min="0" max="9999" step="1" pattern="[0-9]{2}" placeholder="DDD" class="form-control">
                </div>
                <div class="col-sm-3 mb-3">
                    <label for="ddd" class="form-label">Telefone/Celular</label>
                    <input type="text" name="celular" id="celular" placeholder="Digite o número do Telefone" class="form-control phone" required>
                </div>
                <div class="form-group mb-3 col-sm-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required placeholder="Digite o seu e-mail">
                    <small id="emailHelp" class="form-text text-muted">Nós nunca iremos compartilhar o seu e-mail com alguém.</small>
                </div>
                <div class="form-check mb-3 pl-5" style="font-size: 14px; margin-left: 10px;">
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
    @include('layouts.footer')

    @include('layouts.scripts')

    <script>
        var pagina = document.getElementById("lojista");
        pagina.classList.add("active");

        $(document).ready(function(){
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.phone').mask('00000-0000');
        });
    </script>

    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>
    <script src="{{ asset('resources/js/credenciamento.js') }}"></script>
    
@stop