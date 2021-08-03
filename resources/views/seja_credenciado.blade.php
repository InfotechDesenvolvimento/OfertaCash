@extends('layouts.layout', ['pagina' => 'seja_credenciado'])


<link rel="stylesheet" href="{{ asset('resources/css/seja_credenciado.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="{{ asset('resources/js/seja_credenciado.js') }}" ></script>

@section('content')
<div class="pag">
    <div class="div_texto">
        <br><br>
        <h3>Seja credenciado</h3>
        <br><br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                <form id="form_credenciamento" action="{{ route('enviar.credenciamento') }}" method="POST" enctype="multipart/form-data">
                    <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <input type="hidden" name="codigo" id="codigo" @if($cred->CODIGO != null) value="{{ $cred->CODIGO }}" @endif>
                    <div class="group">
                        <input type="text" id="nome_responsavel" name="nome_responsavel" placeholder="NOME DO RESPONSÁVEL" required @if($cred->NOME != null) value="{{ $cred->NOME }}" readonly @endif>
                    </div>

                    <div class="group">
                        <input type="text" id="razao_social" name="razao_social" placeholder="RAZÃO SOCIAL" required>
                    </div>

                    <div class="group">
                        <input type="text" id="nome_fantasia" name="nome_fantasia" placeholder="NOME FANTASIA" required>
                    </div>

                    <div class="group">
                        <div class="select-style">
                            <select name="banco" id="banco" required="true">
                                <option value="">BANCO</option>
                                @foreach($bancos as $banco)
                                    @php
                                        $valor = explode('-', $banco->banco);
                                    @endphp
                                    <option value='{{ $valor[0] }}'
                                    >{{$banco->banco}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="group">
                        <input type="number" name="agencia" id="agencia" placeholder="AGÊNCIA" required>
                    </div>

                    <div class="group">
                        <input type="number" name="conta" id="conta" required placeholder="CONTA">
                    </div>

                    <div class="group">
                        <br>
                        <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" value="0" oninput="this.nextElementSibling.value = this.value">
                        <output>0</output>%
                        <label id="cashback">PERCENTUAL DE CASH BACK</label>
                    </div>

                    <div class="group">
                        <input name="cnpj" id="cnpj" type="text" inputmode="numeric" required placeholder="CNPJ" @if($cred->CNPJ != null) value="{{ $cred->CNPJ }}" readonly @endif>

                        <div class="invalid-feedback" id="invalid-cnpj">
                            CNPJ Inválido
                        </div>
                    </div>

                    <div class="group">
                        <div class="select-style">
                            <select name="ramo_atividade" id="ramo_atividade" required="true">
                                <option value="">RAMO DE ATIVIDADE</option>
                                @foreach($ramos as $ramo)
                                    <option value='{{ $ramo->RAMO_ATIVIDADE }}'
                                    >{{$ramo->RAMO_ATIVIDADE}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="group logomarca">
                        <label for="logomarca">SELECIONE SUA LOGOMARCA</label>
                        <input type="file" name="logomarca" id="logomarca" multiple class="choose" required>
                    </div>

                    <div class="group">
                        <input name="endereco" type="text" required placeholder="ENDEREÇO">
                    </div>

                    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>

                    <div class="group">
                        <div class="select-style">
                            <select required="true" name="estado" id="estado" onchange="buscaCidades(this.value)">
                                <option value="">ESTADO</option>
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
                        
                    </div>

                    <div class="group">
                        <div class="select-style">
                            <select required="true" name="cidade" id="cidade">
                                <option value="">CIDADE</option>
                            </select>
                        </div>
                    </div>

                    <div class="group">
                        <input type="text" name="bairro" id="bairro" required placeholder="BAIRRO">
                    </div>

                    <div class="group">
                        <input type="text" name="cep" id="cep" required placeholder="CEP">
                    </div>

                    <div class="group">
                        <input type="text" name="ddd" id="ddd" required maxlength="2"  min="0" max="9999" step="1" pattern="[0-9]{2}" placeholder="DDD" @if($cred->DDD != null) value="{{ $cred->DDD }}" readonly @endif>
                    </div>

                    <div class="group">
                        <input type="text" name="celular" id="celular" required placeholder="CELULAR" @if($cred->CELULAR != null) value="{{ $cred->CELULAR }}" readonly @endif>
                    </div>

                    <div class="group">
                        <input type="text" name="telefone" id="telefone" required placeholder="TELEFONE" @if($cred->FONE != null) value="{{ $cred->FONE }}" readonly @endif>
                    </div>

                    <div class="group">
                        <input type="email" id="email" name="email" required placeholder="EMAIL" @if($cred->EMAIL != null) value="{{ $cred->EMAIL }}" readonly @endif>
                    </div>


                <br>
                <div class="row" id="contrato">
                    <div class="col-2">
                        <input type="checkbox" name="termos" id="termos" required>
                    </div>
                    <div class="col-sm">
                        <span >Concordo com os Termos do Contrato que regem essa operação:
                            Ao se cadastrar, você aceita os <a href="#">Termos e condições de uso
                            e a Politica de Privacidade</a> do OfertaCash.</span>
                    </div>
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
        <br><br><br><br><br><br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>
@endsection