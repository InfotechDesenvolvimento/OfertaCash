@extends('layouts.layout', ['pagina' => 'seja_credenciado'])


<link rel="stylesheet" href="{{ asset('resources/css/seja_credenciado.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="{{ asset('resources/js/seja_credenciado.js') }}" ></script>

@section('conteudo')
<div class="pag">
    <div class="div_texto">
        <br><br>
        <h3>Seja credenciado</h3>
        <br><br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <br><br>
    </div>
    <div class="credenciamento">
        <div class="fundo">
            <div class="form-div">
            @if(isset($msg))
            <br><br><br><br>
                <div class="alert alert-primary" role="alert">
                    {{ $msg }}
                </div>
            @endif
                <br><br><br>
                <form id="form_credenciamento_landing" action="{{ route('enviar.credenciamento_landing') }}" method="POST">
                    <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="group">
                        <input type="text" id="nome_responsavel" name="nome_responsavel" placeholder="NOME DO RESPONSÁVEL" required>
                    </div>
                    <div class="group">
                        <input name="cnpj" id="cnpj" type="text" inputmode="numeric" required placeholder="CNPJ">

                        <div class="invalid-feedback" id="invalid-cnpj">
                            CNPJ Inválido
                        </div>
                    </div>
                    <div class="group">
                        <input type="text" name="ddd" id="ddd" required maxlength="2"  min="0" max="9999" step="1" pattern="[0-9]{2}" placeholder="DDD">
                    </div>

                    <div class="group">
                        <input type="text" name="celular" id="celular" required placeholder="CELULAR" >
                    </div>

                    <div class="group">
                        <input type="text" name="telefone" id="telefone" required placeholder="TELEFONE">
                    </div>

                    <div class="group">
                        <input type="email" id="email" name="email" required placeholder="EMAIL">
                    </div>
                <br>
                <br>
                    <input type="submit">
                <br><br>
                </form>
            </div>
        </div>
    </div>
    <div class="div_texto">
        <br><br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <br><br>
    </div>
</div>
@endsection