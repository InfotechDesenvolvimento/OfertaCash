@extends('layouts.layout_lojista', ['pagina' => 'disputas'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('resources/css/lojista/disputas.css') }}">
<script type="text/javascript" src="{{ asset('resources/js/lojista/disputas.js')}}"></script>

@section('conteudo')}
    <div class="filtro_div">
        <div class="title">
            <h3>Disputas</h3>
            <hr>
        </div>
        <label>Disputas:</label>
        <select name="situacao" id="situacao">
        </select>  
        <button id="buscar" class="botao_padrao">Buscar</button>
        <input type="hidden" name="tipo" id="tipo" value="{{ Auth::user()->COD_TIPO_USUARIO }}">
        <input type="hidden" name="cod_lojista" id="cod_lojista" value="{{ Auth::user()->CODIGO }}">
    </div>
    <br>
    <div class="table-responsive" id="yesprint">
        <table id="tabela" class="hover row-border" style="width:100%; "> 
          <thead>
            <tr>
                <th id="col4">#</th> 
                <th id="col5">CPF CLIENTE</th> 
                <th id="col4">VALOR TOTAL</th> 
                <th id="col5">DATA INICIO</th> 
                <th id="col5">SITUAÇÃO</th>
            </tr>
          </thead>
          <tbody id="itens"> 
          </tbody>
        </table>
    </div>
@endsection