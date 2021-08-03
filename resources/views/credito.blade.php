@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/credito.css') }}">

@section('content')
    <div class="container sobre mb-0" data-aos="fade-up-right">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <h1 id="pagina-titulo">Crédito</h1>
            </div>
            <div class="col-sm-4">
                <h4 id="pagina-subtitulo">Abra a sua conta!</h4>
            </div>
            <div class="col-sm-12 mt-3">
                <p class="text-center info-credito">
                   Oferecemos diversas opções de crédito:
                </p>
            </div>
            <div class="col-sm-12 lista">
                <p class="text-center"><i class="bi bi-check2-circle text-primary"></i> Crédito Pessoal</p>
                <p class="text-center"><i class="bi bi-check2-circle text-primary"></i> Conta de Luz</p>
                <p class="text-center"><i class="bi bi-check2-circle text-primary"></i> Antecipação Saque Aniversário FGTS</p>
                <p class="text-center"><i class="bi bi-check2-circle text-primary"></i> Auto Financiamento de Veículo</p>
                <p class="text-center"><i class="bi bi-check2-circle text-primary"></i> Auto Financiamento de Imóveis</p>
                <p class="text-center"><i class="bi bi-check2-circle text-primary"></i> Crédito Consignado Público e Privado (mediante convênio prévio), dentre outros...</p>
            </div>
        </div>
    </div>

    <div class="container mb-0" data-aos="fade-up-right">
        <div class="row align-items-center">
            @include('simulador-emprestimo')
        </div>
    </div>
    
    <div class="container p-5 mt-0 d-none">
        <form action="{{ route('enviar.credenciamento_cliente') }}" method="POST">
            <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
            <div class="form-row">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o seu nome">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control cpf" id="cpf" placeholder="Digite o seu CPF">
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="custom-select form-control" name="estado" id="estado" onchange="buscaCidades(this.value)">
                        <option selected>Selecione o estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <select class="custom-select form-control" required="true" name="cidade" id="cidade">
                        <option selected>Selecione a cidade</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado Civil</label>
                    <select required="true" name="estado_civil" id="estado_civil" class="custom-select form-control">
                        <option selected>Estado Civil</option>
                        <option value="1">Solteiro</option>
                        <option value="2">Casado</option>
                        <option value="3">Separado</option>
                        <option value="4">Divorciado</option>
                        <option value="5">Viúvo</option>
                        <option value="6">Amasiado</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite o seu e-mail">
                    <small id="emailHelp" class="form-text text-muted">Nós nunca iremos compartilhar o seu e-mail com alguém.</small>
                </div>
                <div class="mb-3">
                    <label for="cartao" class="form-label">Cartão</label>
                    <input type="text" class="form-control" id="cartao" placeholder="Cartão Visa/Mastercard">
                </div>
                <div class="mb-3">
                    <label for="bandeira" class="form-label">Bandeira</label>
                    <input type="text" class="form-control" id="bandeira" placeholder="Bandeira">
                </div>
                <div class="mb-3">
                    <label for="empresa" class="form-label">Trabalha em qual empresa?</label>
                    <input type="text" class="form-control" id="empresa" placeholder="Digite a empresa na qual trabalha">
                </div>
                <div class="mb-3">
                    <label for="promocional" class="form-label">Código Promocional</label>
                    <input type="text" class="form-control" id="promocional" placeholder="Caso possua, digite o código promocional">
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
    @include('layouts.footer')
    <script>
        var pagina = document.getElementById("credito");
        pagina.classList.add("active");
    </script>
    <script src="{{ asset('resources/js/cash-carteira.js') }}"></script>
    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
@stop