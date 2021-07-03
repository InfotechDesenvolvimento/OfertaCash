@extends('layouts.layout_lojista', ['pagina' => 'vendas_recebidas'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('resources/css/lojista/credenciadas.css') }}">
<script type="text/javascript" src="{{ asset('resources/js/lojista/vendas_recebidas.js')}}"></script>

@section('conteudo')}
    <div class="filtro_div">
        <div class="title">
            <h3>Vendas Recebidas</h3>
            <hr>
        </div>
        <input type="date" name="inicio_periodo" id="inicio_periodo">
        <input type="date" name="fim_periodo" id="fim_periodo">
        <button id="buscar" class="botao_padrao">Buscar</button>
        <button id="limpar" class="botao_padrao">Limpar</button>
    </div>
    <br>
    <input type="hidden" id="cod_lojista" name="cod_lojista" value="{{ Auth::user()->codigo }}">
    <div class="table-responsive" id="yesprint">
        <table id="tabela" class="hover row-border" style="width:100%; "> 
          <thead>
            <tr> 
                <th id="col4">DATA VENCIMENTO</th> 
                <th id="col5">VALOR</th> 
                <th id="col4">STATUS</th> 
                <th id="col5">CPF CLIENTE</th>
            </tr>
          </thead>
          <tbody id="itens"> 
          </tbody>
        </table>
    </div>
@endsection