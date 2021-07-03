@extends('layouts.layout_cliente', ['pagina' => 'pagamentos_pendentes'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('resources/css/cliente/credenciadas.css') }}">

@section('conteudo')
        <div class="box">
            <div class="title">
                <h3>Pagamentos Pendentes</h3>
                <hr>
            </div>
        </div>
        <br><br>
        <div class="table-responsive" id="yesprint">
            <table id="tabela" class="hover row-border" style="width:100%; "> 
                <thead>
                <tr>
                    <th>ID Lojista</th>
                    <th>Lojista</th>
                    <th>Data Venda</th> 
                    <th>Hora Venda</th>
                    <th>Valor Total</th>
                    <th>Nº Parcelas</th>
                </tr>
                </thead>
                <tbody id="itens"> 
                    @foreach($vendas as $item)
                        <td>{{ $item->COD_LOJISTA }}</td>
                        <td>{{ $item->NOME_LOJISTA }}</td>
                        <td>{{ $item->DATA_VENDA }}</td>
                        <td>{{ $item->HORA_VENDA }}</td>
                        <td>{{ $item->VALOR_TOTAL }}</td>
                        <td>{{ $item->NUM_PARCELAS }}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection