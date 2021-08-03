@extends('layouts.layout_cliente', ['pagina' => 'credenciadas'])

<link rel="stylesheet" href="{{ asset('resources/css/cliente/home.css') }}">
<link rel="stylesheet" href="{{ asset('resources/css/cliente/credenciadas.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@section('content')}
    <style type="text/css">
        #credenciadas_cliente {
            color: var(--white-color);
        }

        #credenciadas_cliente::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }
    </style>

    <h2 id="dashboard" style="margin-top: 80px;">Redes Credenciadas</h2>
    <hr>

    <div class="filtro_div mb-5">
        <div class="container pt-3">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="estados"> Estado: </label>
                        <select class="form-control" name="estados" id="estados">
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="cidades"> Cidade: </label>
                        <select class="form-control" id="cidades">
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="categoria"> Categoria: </label>
                        <select class="form-control" id="categoria">
                        </select>
                        <div class="row mt-3 mb-3 justify-content-end">
                            <div class="col-6 align-self-end">
                                <button id="limpar" class="btn btn-secondary btn-block">Limpar</button>
                            </div>
                            <div class="col-6 align-self-end">
                                <button type="button" class="btn btn-primary btn-block" id="buscar">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="cidadeClienteCodigo" id="cidadeClienteCodigo" value="{{ Auth::user()->cod_cidade }}">
    <input type="hidden" name="ufClienteCodigo" id="ufClienteCodigo" value="{{ Auth::user()->cod_uf }}">
    
    <table id="tabela" class="table">
        <thead>
            <tr>
                <th id="col4"> Empresa </th> 
                <th id="col5"> Cidade </th> 
                <th id="col4"> Ramo de Atividade </th> 
                <th id="col5"> Telefone </th> 
                <th id="col5"> Payback </th>
            </tr>
        </thead>
        <tbody id="itens"> 
        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script type="text/javascript" src="{{ asset('resources/js/cliente/credenciadas.js')}}"></script>
@endsection