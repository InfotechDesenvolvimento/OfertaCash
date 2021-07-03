@extends('layouts.layout_lojista', ['pagina' => 'home'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('resources/js/lojista/home.js')}}"></script>
<link rel="stylesheet" href="{{ asset('resources/css/lojista/home.css') }}">

@section('conteudo')
    <input type="hidden" id="ramo_alimenticio" name="ramo_alimenticio" value="{{ Auth::user()->RAMO_ALIMENTO }}">
    <input type="hidden" id="codigo_lojista" name="codigo_lojista" value="{{ Auth::user()->codigo }}">
    <input type="hidden" id="nome_lojista" name="nome_lojista" value="{{ Auth::user()->nome }}">
    <div class="box">
        <div class="title">
            <h3>Detalhes do pedido</h3>
            <hr>
        </div>
        <div class="input">
            <input type="text" name="valor_total" id="valor_total" placeholder="Valor total dos itens">
        </div>
    </div>
    <br><br><br>
    <div class="box">
        <div class="title">
            <h3>Dados do cliente</h3>
            <hr>
        </div>
        <div class="input flow">
            <input type="number" name="id" id="id" placeholder="ID">
            <input type="text" name="cpf" id="cpf" placeholder="CPF">
        </div>
        <label id="erro-cliente">Cliente não encontrade!</label>
        <label id="erro-valor">Valor deve ser maior que 0!</label>
        <label id="erro-saldo">Saldo do cliente insuficiente!</label>
        <label id="erro-cpf-id">CPF ou ID devem ser preenchidos!</label>
        <label id="erro-ativada">Conta do cliente não ativada!</label>
        <button class="botao_padrao" id="buscar">Buscar</button>
    </div>
    <br>
    <div id="info-cliente" class="box">
        <div class="title">
            <h3>Detalhes do Cliente</h3>
            <hr>
        </div>
        <div class="detalhes-cliente">
            <input type="text" value="CÓDIGO:" class="input-label" readonly>
            <input type="text" value="NOME:" class="input-label" readonly>
            <input type="text" value="DATA DE NASCIMENTO:" class="input-label" readonly>
            <input type="text" value="CPF:" class="input-label" readonly>
        </div>
        <div class="detalhes-cliente">
            <input type="text" name="codigo_cliente" id="codigo_cliente" readonly>
            <input type="text" name="nome_cliente" id="nome_cliente" readonly>
            <input type="date" name="data_cliente" id="data_cliente" readonly>
            <input type="text" name="cpf_cliente" id="cpf_cliente" readonly>
        </div>
        <button id="confirmar_cliente" class="botao_padrao">Confirmar</button>
    </div>
    <br>
    <div id="info-pagamento" class="box">
        <div class="detalhes-pagamento">
            <select name="forma_pagamento" id="forma_pagamento">
            </select>
        </div>
    </div>
    <br>
    <div id="senha-cliente" class="box">
        <div class="detalhes-cliente">
            <input type="password" name="senha_cliente" id="senha_cliente" placeholder="SENHA DO CLIENTE">
            <button id="verificar_senha" class="botao_padrao">Confirmar</button>
        </div>
        <label id="erro_senha">Senha incorreta!</label>
        <label id="sucesso_senha">Senha correta! Finalize a venda.</label>
    </div>
    <br>
    <div class="flex box_button">
        <button id="confirmar_senha" class="botao_padrao">Confirmar Senha</button>
        <button id="cancelar_venda" class="botao_padrao">Cancelar</button>
        <button id="finalizar" class="botao_padrao">Finalizar</button>
    </div>
@endsection