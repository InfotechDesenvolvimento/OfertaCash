@extends('layouts.layout_cliente', ['pagina' => 'extratos'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('resources/css/cliente/credenciadas.css') }}">
<script type="text/javascript" src="{{ asset('resources/js/cliente/extratos.js')}}"></script>

@section('conteudo')
        <div class="box">
            <div class="title">
                <h3>Extratos</h3>
                <hr>
            </div>
        </div>
        <input type="hidden" name="cod_cliente" id="cod_cliente" value="{{ Auth::user()->codigo }}">
        <br><br>
        <div class="table-responsive" id="yesprint">
            <table id="tabela" class="hover row-border" style="width:100%; "> 
                <thead>
                <tr>
                    <th>Data Compra</th>
                    <th>Empresa</th>
                    <th>Valor Total</th> 
                    <th>Parcelas</th>
                    <th>Percentual</th>
                    <th>Payback</th>
                </tr>
                </thead>
                <tbody id="itens"> 
                </tbody>
            </table>
        </div>
@endsection