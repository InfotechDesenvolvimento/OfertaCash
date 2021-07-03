@extends('layouts.layout_lojista', ['pagina' => 'estornos_recusados'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('resources/css/lojista/credenciadas.css') }}">
<script type="text/javascript" src="{{ asset('resources/js/lojista/estornos_recusados.js')}}"></script>

@section('conteudo')}
    <div class="filtro_div">
        <div class="title">
            <h3>Estornos Recusados</h3>
            <hr>
        </div>
        <input type="date" name="inicio_periodo" id="inicio_periodo">
        <input type="date" name="fim_periodo" id="fim_periodo">
        <button id="buscar" class="botao_padrao">Buscar</button>
        <button id="limpar" class="botao_padrao">Limpar</button>
    </div>
    <br>
    <div class="table-responsive" id="yesprint">
        <table id="tabela" class="hover row-border" style="width:100%; "> 
          <thead>
            <tr>
                <th id="col4">Data Est.</th>
                <th id="col5">Valor T.</th>
                <th id="col4">CPF Cliente</th>
                <th id="col5">Observação</th>
            </tr>
          </thead>
          <tbody id="itens">
          </tbody>
        </table>
    </div>
@endsection