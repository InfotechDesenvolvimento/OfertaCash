@extends('layouts.layout_lojista', ['pagina' => 'credenciadas'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('resources/css/lojista/credenciadas.css') }}">
<script type="text/javascript" src="{{ asset('resources/js/lojista/credenciadas.js')}}"></script>

@section('conteudo')}
    <div class="filtro_div">
        <div class="title">
            <h3>Redes Credenciadas</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col">
                <label>Estado:</label>
                <select name="estados" id="estados">
                </select>
            </div>
            <div class="col">
                <label>Cidade:</label>
                <select name="cidades" id="cidades">
                </select>
            </div>
            <div class="col">
                <label>Categoria:</label>
                <select name="categoria" id="categoria">
                </select>
            </div>    
        </div>
        <button id="buscar" class="botao_padrao">Buscar</button>
        <button id="limpar" class="botao_padrao">Limpar</button>
    </div>

    <input type="hidden" name="cidadeClienteCodigo" id="cidadeClienteCodigo" value="{{ Auth::user()->cod_cidade }}">
    <input type="hidden" name="cidadeCliente" id="cidadeCliente" value="{{ $cidade->cidade }}">
    <input type="hidden" name="ufCliente" id="ufCliente" value="{{ $estado->uf }}">
    <input type="hidden" name="ufClienteCodigo" id="ufClienteCodigo" value="{{ Auth::user()->cod_uf }}">
    <br>
    
    <div class="table-responsive" id="yesprint">
        <table id="tabela" class="hover row-border" style="width:100%; "> 
          <thead>
            <tr> 
                <th id="col4">EMPRESA</th> 
                <th id="col5">CIDADE</th> 
                <th id="col4">RAMO ATIVIDADE</th> 
                <th id="col5">TELEFONE</th> 
                <th id="col5">PAY BACK</th>
            </tr> 
          </thead>
          <tbody id="itens"> 
          </tbody>
        </table>
    </div>
@endsection