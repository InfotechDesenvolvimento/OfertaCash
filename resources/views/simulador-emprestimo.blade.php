<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/simulador-emprestimo.css') }}">

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
	                <p class="text-center" id="parcela-de">Parcela de:</p>
	            </div>
	            <div class="col-sm-6">
	                <p class="text-center" id="valor-simulacao">R$ 106.00</p>
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
                	<input type="number" value="100.00" name="simulacao-dinheiro" 
                	id="simulacao-dinheiro" class="dinheiro" pattern="[0-9]+([\.,][0-9]+)?">
					<i class="bi bi-plus-circle fa-lg btn-soma" id="mais" onclick="mais()"></i>
                </div>
            </div>
            <div class="col-sm-12 mt-3">
                <div class="d-flex justify-content-center align-items-center">
		            <p class="min-max" style="margin-right: 15px;">Min: R$ 100,00</p>
                    <p class="min-max" style="margin-left: 15px;">Max: R$ 10.000,00</p>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('resources/js/simulador-credito.js') }}"></script>