@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/cash.css') }}">

@section('content')
	<div class="container sobre mb-0" data-aos="fade-up-right">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <h1 id="pagina-titulo">Cash Carteira</h1>
            </div>
            <div class="col-sm-4">
                <h4 id="pagina-subtitulo">Abra a sua conta!</h4>
            </div>
            <div class="col-sm-12">
                <p id="info-sobre">
                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>

    <div class="container mb-0" data-aos="fade-up-right">
        <div class="row align-items-center">
            <div class="col-sm-4 mb-5">
                <h4 id="pagina-subtitulo2">Faça uma simulação!</h4>
            </div>
            <div class="col-sm-8"></div>

			<div class="col-sm-6">
				<div class="card h-100" id="resultado-simulacao">
					<div class="card-body mt-3">
						<h5 class="card-title text-center">Quantidade de Parcelas</h5>
						<p class="card-text text-center" id="legenda">Selecione a quantidade de parcelas desejadas.</p>
						<div class="d-flex justify-content-center mb-4">
							<div class="d-inline text-white px-4 py-2 select-parcela" id="botao-01">
								<a id="mudar-01">1</a>
							</div>
							<div class="d-inline text-white px-4 py-2 select-parcela" id="botao-02">
								<a id="mudar-02">2</a>
							</div>
							<div class="d-inline text-white px-4 py-2 select-parcela" id="botao-03">
								<a id="mudar-03">3</a>
							</div>
							<div class="d-inline text-white px-4 py-2 select-parcela" id="botao-04">
								<a id="mudar-04">4</a>
							</div>
							<div class="d-inline text-white px-4 py-2 select-parcela" id="botao-05">
								<a id="mudar-05">5</a>
							</div>
							<div class="d-inline text-white px-4 py-2 select-parcela" id="botao-06">
								<a id="mudar-06">6</a>
							</div>
						</div>
						<div class="row align-items-center" style="margin-top: 30px;">
							<!-- Parcela 01 -->
				            <div class="col-sm-6">
				                <p class="text-center">Parcelas de:</p>
				            </div>
				            <div class="col-sm-6">
				                <p class="text-center" id="valor-simulacao">R$ 30,000.00</p>
				            </div>
				        </div>
					</div>
				</div>
			</div>

            <div class="col-sm-6">
				<div class="card h-100" id="simulacao-cash">
					<div class="card-body">
						<div class="col-sm-12">
			                <div class="d-flex justify-content-center align-items-center p-5 pb-0">
								<i class="bi bi-dash-circle fa-lg btn-soma" onclick="menos()"></i>
			                	<input type="text" name="simulacao-dinheiro" id="simulacao-dinheiro" class="dinheiro" value="30,000.00" maxlength="12">
								<i class="bi bi-plus-circle fa-lg btn-soma" id="mais" onclick="mais()"></i>
			                </div>
			            </div>
			            <div class="col-sm-12 mt-3">
			                <div class="d-flex justify-content-center align-items-center">
					            <p class="min-max" style="margin-right: 15px;">Min: R$ 30.000</p>
					            <p class="min-max" style="margin-left: 15px;">Max: R$ 3.000.000</p>
			                </div>
			            </div>
			            <div class="col-sm-12 mt-3">
			                <div class="d-flex justify-content-center align-items-center">
					            <p id="info-juros">Em até 6 parcelas de 6% de juros ao mês!</p>
			                </div>
			            </div>
			            <div class="col-sm-12 mt-3 mb-5">
			            	<div class="d-flex justify-content-center">
			            		<small class="text-muted">
				                    <a href="/ofertacash/login" class="btn-grad">
				                    	Solicitar Empréstimo <i class="bi bi-arrow-right"></i>
				                    </a>
				                </small>
			            	</div>
			            </div>
					</div>
				</div>
			</div>

        </div>
    </div>
    	
    </div>
    <div class="container p-5 mt-0 d-none">
		<form action="{{ route('enviar.credenciamento_cliente') }}" method="POST">
			<input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
			<div class="form-row">
				<div class="mb-3">
					<label for="nome" class="form-label">Nome</label>
					<input type="text" class="form-control" id="nome" placeholder="Digite o seu nome">
				</div>
				<div class="mb-3">
					<label for="cpf" class="form-label">CPF</label>
					<input type="text" class="form-control cpf" id="cpf" placeholder="Digite o seu CPF">
				</div>
				<div class="mb-3">
					<label for="estado" class="form-label">Estado</label>
					<select class="custom-select form-control" name="estado" id="estado" onchange="buscaCidades(this.value)">
						<option selected>Selecione o estado</option>
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
				<div class="mb-3">
					<label for="cidade" class="form-label">Cidade</label>
					<select class="custom-select form-control" required="true" name="cidade" id="cidade">
						<option selected>Selecione a cidade</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="estado" class="form-label">Estado Civil</label>
					<select required="true" name="estado_civil" id="estado_civil" class="custom-select form-control">
                        <option selected>Estado Civil</option>
                        <option value="1">Solteiro</option>
                        <option value="2">Casado</option>
                        <option value="3">Separado</option>
                        <option value="4">Divorciado</option>
                        <option value="5">Viúvo</option>
                        <option value="6">Amasiado</option>
                    </select>
				</div>
				<div class="form-group mb-3">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite o seu e-mail">
					<small id="emailHelp" class="form-text text-muted">Nós nunca iremos compartilhar o seu e-mail com alguém.</small>
				</div>
				<div class="mb-3">
					<label for="cartao" class="form-label">Cartão</label>
					<input type="text" class="form-control" id="cartao" placeholder="Cartão Visa/Mastercard">
				</div>
				<div class="mb-3">
					<label for="bandeira" class="form-label">Bandeira</label>
					<input type="text" class="form-control" id="bandeira" placeholder="Bandeira">
				</div>
				<div class="mb-3">
					<label for="empresa" class="form-label">Trabalha em qual empresa?</label>
					<input type="text" class="form-control" id="empresa" placeholder="Digite a empresa na qual trabalha">
				</div>
				<div class="mb-3">
					<label for="promocional" class="form-label">Código Promocional</label>
					<input type="text" class="form-control" id="promocional" placeholder="Caso possua, digite o código promocional">
				</div>
				<div class="form-check mb-3">
					<input type="checkbox" class="form-check-input" id="termos" required>
					<label class="form-check-label" for="exampleCheck1">
						Concordo com os Termos do Contrato que regem essa operação: Ao se cadastrar, você aceita os
						<a href="#">
							Termos e condições de uso e a Politica de Privacidade
						</a>
						do Abm Cash.
                    </label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
    </div>

    <footer>
        <div class="fundo">
            <h2 data-aos="fade-down">The Power To Help You Succeed</h2>
            <p id="information" data-aos="fade-up">Velit laborum incididunt voluptate ea incididunt quis sed sit esse in dolor et sint esse cupidatat ex dolore ut enim do dolore consectetur in quis amet dolor sint sed nulla sit et nulla esse ad id voluptate pariatur reprehenderit dolore aliquip ut ut exercitation proident cupidatat culpa sint cupidatat velit elit commodo dolor qui irure eiusmod occaecat ad excepteur ad aliqua et duis aute in dolor enim cillum nulla id proident in irure pariatur fugiat ad eu dolor ad consequat sed incididunt adipisicing reprehenderit cupidatat sunt tempor ut mollit anim consequat magna cupidatat dolore ad sed laborum in occaecat commodo irure nulla consectetur exercitation mollit aliqua tempor ad proident laboris laborum fugiat qui voluptate dolor reprehenderit mollit excepteur et sed non labore ut aliquip ut ex id aliquip sint enim cillum nisi.</p>
        </div>
    </footer>

    <div class="credits">
        <p class="text-center">OfertaCash 2021</p>
    </div>

    <script>
        var cash = document.getElementById("cash");
        cash.classList.add("active");
        $(document).ready(function(){
		    $('.cpf').mask('000.000.000-00', {reverse: true});
		    $('.dinheiro').mask('000.000.000.000.000,00', {reverse: true});

		    $("#botao-01").click(function() {

		    	dinheiro = document.getElementById("simulacao-dinheiro").value;
		    	dinheiro = parseInt(dinheiro) * 1;
		    	dinheiro = format2((dinheiro*1000), '');

				document.getElementById('valor-simulacao').innerHTML = "R$ " + dinheiro;
			});

			$("#botao-02").click(function() {
				dinheiro = document.getElementById("simulacao-dinheiro").value;
		    	dinheiro = parseInt(dinheiro) * 1;

		    	dinheiro = format2(((dinheiro*1000) / 2)*0.06 + ((dinheiro*1000) / 2), '');

				document.getElementById('valor-simulacao').innerHTML = "R$ " + dinheiro;
			});

			$("#botao-03").click(function() {
				dinheiro = document.getElementById("simulacao-dinheiro").value;
		    	dinheiro = parseInt(dinheiro) * 1;
		    	
		    	dinheiro = format2(((dinheiro*1000) / 3)*0.06 + ((dinheiro*1000) / 3), '');

				document.getElementById('valor-simulacao').innerHTML = "R$ " + dinheiro;
			});

			$("#botao-04").click(function() {
				dinheiro = document.getElementById("simulacao-dinheiro").value;
		    	dinheiro = parseInt(dinheiro) * 1;

		    	dinheiro = format2(((dinheiro*1000) / 4)*0.06 + ((dinheiro*1000) / 4), '');

				document.getElementById('valor-simulacao').innerHTML = "R$ " + dinheiro;
			});

			$("#botao-05").click(function() {
				dinheiro = document.getElementById("simulacao-dinheiro").value;
		    	dinheiro = parseInt(dinheiro) * 1;
		    	
		    	dinheiro = format2(((dinheiro*1000) / 5)*0.06 + ((dinheiro*1000) / 5), '');

				document.getElementById('valor-simulacao').innerHTML = "R$ " + dinheiro;
			});

			$("#botao-06").click(function() {
				dinheiro = document.getElementById("simulacao-dinheiro").value;
		    	dinheiro = parseInt(dinheiro) * 1;
		    	
		    	dinheiro = format2(((dinheiro*1000) / 6)*0.06 + ((dinheiro*1000) / 6), '');

				document.getElementById('valor-simulacao').innerHTML = "R$ " + dinheiro;
			});
	  	});

    </script>
    <script src="{{ asset('resources/js/cash-carteira.js') }}"></script>
    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
@stop