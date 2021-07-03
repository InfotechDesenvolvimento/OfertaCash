@extends('layouts.layout', ['pagina' => 'cash_carteira'])

<link rel="stylesheet" href="{{ asset('resources/css/minha_conta.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('resources/js/minha_conta.js') }}" ></script>

@section('conteudo')
<div class="pag">
    <div class="div_texto">
        <br><br>
        <h3>Abra sua conta!</h3>
        <br><br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="minha_conta">
        <div class="fundo">
            <div class="container">
                @if(isset($msg))
                <br><br><br><br>
                    <div class="alert alert-primary" role="alert">
                        {{ $msg }}
                    </div>
                @endif
                <br><br><br>
                <form action="{{ route('enviar.credenciamento_cliente') }}" method="POST">
                    <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <div class="row group">
                        <div class="col">
                            <input type="text" id="nome" name="nome" placeholder="SEU NOME" required>
                        </div>
                        <div class="col">
                            <input type="text" id="cpf" name="cpf" placeholder="CPF" required>
                        </div>
                    </div>

                    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>

                    <div class="row group">
                        <div class="col">
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
                        <div class="col">
                            <select required="true" name="cidade" id="cidade">
                                <option value="">CIDADE</option>
                            </select>
                        </div>
                    </div>

                    <div class="row group">
                        <div class="col">
                            <input type="text" name="endereco" id="endereco" placeholder="ENDEREÇO" required>
                        </div>
                        <div class="col">
                            <input type="text" name="bairro" id="bairro" placeholder="BAIRRO" required>
                        </div>
                    </div>

                    <div class="row group">
                        <div class="col">
                            <input type="text" name="cep" id="cep" required placeholder="CEP">
                        </div>
                        <div class="col">
                            <input type="text" name="nascimento" id="nascimento" placeholder="DATA DE NASCIMENTO">
                        </div>
                    </div>

                    <div class="row group">
                        <div class="col">
                            <input type="text" name="ddd" id="ddd" required maxlength="2"  min="0" max="9999" step="1" pattern="[0-9]{2}" placeholder="DDD">
                        </div>
                        <div class="col">
                            <input type="text" name="celular" id="celular" required placeholder="CELULAR">
                        </div>
                        <div class="col">
                            <input type="text" name="telefone" id="telefone" required placeholder="TELEFONE">
                        </div>
                    </div>

                    <div class="row group">
                        <div class="col">
                            <select required="true" name="estado_civil" id="estado_civil">
                                <option value="" >ESTADO CIVIL</option>
                                <option value="1">SOLTEIRO</option>
                                <option value="2">CASADO</option>
                                <option value="3">SEPARADO</option>
                                <option value="4">DIVORCIADO</option>
                                <option value="5">VIÚVO</option>
                                <option value="6">AMASIADO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="email" id="email" name="email" required placeholder="EMAIL">
                        </div>
                    </div>

                    <div class="row group">
                        <div class="col">
                            <input type="text" name="cartao" id="cartao" placeholder="CARTÃO VISA/MASTERCARD">
                        </div>
                        <div class="col">
                            <input type="text" name="bandeira" id="bandeira" placeholder="BANDEIRA" readonly>
                        </div>
                    </div>

                    <div class="group">
                        <input name="empresa" type="text" required placeholder="TRABALHA EM QUAL EMPRESA?">
                    </div>

                    <div class="group">
                        <input type="text" id="promocional" name="promocional" placeholder="CÓDIGO PROMOCIONAL">
                    </div>

                    <br>
                    <div class="row" id="contrato">
                        <div class="col-3">
                            <input type="checkbox" name="termos" id="termos" required>
                        </div>
                        <div class="col-sm">
                            <span >Concordo com os Termos do Contrato que regem essa operação:
                                Ao se cadastrar, você aceita os <a href="#">Termos e condições de uso
                                e a Politica de Privacidade</a> do Abm Cash.</span>
                        </div>
                    </div>
                    <input type="submit">
                </form>
            </div>
            <br><br>
        </div>
    </div>
    <div class="div_texto">
        <br><br><br><br><br><br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>
@endsection