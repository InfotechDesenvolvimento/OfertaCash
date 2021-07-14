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

    <div class="container p-5 mt-0">
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
	  	});
    </script>
    <script src="{{ asset('resources/js/estados-cidades.js') }}"></script>
@stop