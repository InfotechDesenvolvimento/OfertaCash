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
                <h4 id="pagina-subtitulo">
                	<a href="#" id="criar-conta" data-toggle="modal" data-target="#exampleModal">
                		Crie a sua Cash Carteira <i class="bi bi-arrow-right text-primary"></i>
                	</a>
                </h4>
            </div>
            <div class="col-sm-12 mt-4">
                <p id="info-sobre" style="font-size: 20px; text-align: center;">
                   Acompanhe o saldo acumulado de cashback (recompensas) de suas compras e resgates. 
                </p>
            </div>
            <div class="col-sm-12 mb-5 mt-4">
                <h4 id="pagina-subtitulo2" class="text-center">
                	Precisando de Crédito Pessoal? Faça uma simulação! 
                	<i class="bi bi-arrow-down fa-sm"></i>
                </h4>
            </div>
            @if(isset($success))
	            <div class="alert alert-success" role="alert">
	              {{ $success }}
	            </div>
	        @endif

	        @if(isset($error))
	            <div class="alert alert-success" role="alert">
	              {{ $error }}
	            </div>
	        @endif
        </div>
    </div>

    <div class="container mb-0" data-aos="fade-up-right">
        <div class="row align-items-center">
            @include('simulador-emprestimo')
        </div>
    </div>

  	<!-- Cadastro de Pessoa Física -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cadastro de Pessoa Física</h5>
					<button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('cash.cadastro') }}" method="POST">
						<input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
					  	<div class="row">
						    <div class="col-sm-6">
						    	<label for="nome" class="form-label">Nome</label>
						      	<input type="text" class="form-control" placeholder="Digite o seu nome" name="nome" required>
						    </div>
						    <div class="col-sm-6">
					    		<label for="cpf" class="form-label">CPF</label>
						      	<input type="text" class="form-control cpf" placeholder="Digite o seu CPF" name="cpf" required>
						      	<div class="invalid-feedback" id="invalid-cnpj">
			                        CNPJ Inválido
			                    </div>
						    </div>
						    <div class="col-sm-4 mt-3">
					    		<label for="data-nascimento" class="form-label">Data de Nascimento</label>
						      	<input type="date" class="form-control" name="data-nascimento" required>
						    </div>
						    <div class="col-sm-4 mt-3">
					    		<label for="estado-civil" class="form-label">Estado Civil</label>
							    <select class="form-control" id="estado-civil" name="estado-civil" required>
							    	<option selected disabled>Escolha uma opção</option>
							    	@foreach($estados_civis as $estado_civil)
										<option value="{{ $estado_civil->ESTADO_CIVIL }}">
										 {{ $estado_civil->ESTADO_CIVIL }} 
										</option>
									@endforeach
							    </select>
						    </div>
						    <div class="col-sm-4 mt-3">
					    		<label for="cidade" class="form-label">Cidade</label>
							    <select class="form-control" id="cidade" name="cidade" required>
							    	<option selected disabled>Escolha uma opção</option>
							    	@foreach($cidades as $cidade)
										<option value="{{ $cidade->CIDADE }}"> {{ $cidade->CIDADE }} </option>
									@endforeach
							    </select>
						    </div>
						    <div class="col-sm-2 mt-3">
					    		<label for="uf" class="form-label">UF</label>
							    <select class="form-control" id="uf" name="uf" required>
							    	<option selected disabled>Escolha uma opção</option>
							    	@foreach($estados as $estado)
										<option value="{{ $estado->UF }}"> {{ $estado->UF }} </option>
									@endforeach
							    </select>
						    </div>
						    <div class="col-sm-4 mt-3">
					    		<label for="bairro" class="form-label">Bairro</label>
						      	<input type="text" class="form-control" placeholder="Digite o seu Bairro" name="bairro" required>
						    </div>
						    <div class="col-sm-6 mt-3">
					    		<label for="endereco" class="form-label">Endereço</label>
						      	<input type="text" class="form-control" placeholder="Digite o seu Endereço" name="endereco" required>
						    </div>
						    <div class="col-sm-4 mt-3">
					    		<label for="cep" class="form-label">CEP</label>
						      	<input type="text" class="form-control" placeholder="Digite o seu CEP" name="cep" required>
						    </div>
						    <div class="col-sm-2 mt-3">
					    		<label for="ddd" class="form-label">DDD</label>
						      	<input type="text" name="ddd" id="ddd" required maxlength="2" min="0" max="9999" step="1" pattern="[0-9]{2}" placeholder="DDD" class="form-control">
						    </div>
						    <div class="col-sm-6 mt-3">
					    		<label for="celular" class="form-label">Celular</label>
						      	<input type="text" class="form-control phone" placeholder="Digite o número do seu celular" name="celular" required>
						    </div>
						    <div class="col-sm-6 mt-3">
					    		<label for="email" class="form-label">E-mail</label>
						      	<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required placeholder="Digite o seu e-mail">
                				<small id="emailHelp" class="form-text text-muted">Nós nunca iremos compartilhar o seu e-mail com alguém.</small>
						    </div>
						    <div class="col-sm-6 mt-3">
					    		<label for="codigo" class="form-label">Código Promocional</label>
						      	<input type="text" class="form-control" name="codigo" placeholder="Digite o código promocional">
						    </div>
						    <div class="col-sm-12 form-check pl-5 mt-3" style="font-size: 14px; margin-left: 10px;">
			                    <input type="checkbox" class="form-check-input" id="termos" required>
			                    <label class="form-check-label" for="exampleCheck1">
			                        Concordo com os Termos do Contrato que regem essa operação: Ao se cadastrar, você aceita os
			                        <a href="#">
			                            Termos e condições de uso e a Politica de Privacidade
			                        </a>
			                         da OfertaCash.
			                    </label>
			                </div>
			                <div class="col-sm-12 mt-3" style="justify-content: flex-end; display: flex;">
			                	<button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 10px;">
			                		Fechar
			                	</button>
					    		<button type="submit" class="btn btn-primary">Salvar</button>
						    </div>
				  		</div>
					</form>
				</div>
			</div>
		</div>
	</div>

    @include('layouts.footer')

    @include('layouts.scripts')

    <script>
        var pagina = document.getElementById("cash");
        pagina.classList.add("active");

        $(document).ready(function(){
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.phone').mask('00000-0000');
        });
    </script>

	<script src="{{ asset('resources/js/cash-carteira.js') }}"></script>
	
@stop