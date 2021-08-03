@extends('layouts.layout')

@section('title', 'Page Title')

<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/quem-somos.css') }}">

@section('content')
	<div class="container sobre" data-aos="fade-up-right">
		<div class="row">
			<div class="col-sm-12">
				<h1 id="quem-somos-titulo">Quem Somos</h1>
			</div>
			<div class="col-sm-12" style="font-size: 20px;">
				<p id="info-sobre">
					Aliamos 15 anos de desenvolvimento de soluções de tecnologia da informação com 30 anos de experiência de mercado financeiro alinhados com o que há de mais moderno na tecnologia, e nas soluções financeiras digitais às empresas e seus clientes.
				</p>
				<p id="info-sobre">
					As MEI, ME e EPPs podem contar com uma ferramenta simples e prática de cashback (gerenciamento de recompensas próprias e de parceiros).
				</p>
			</div>
		</div>
	</div>
	@include('layouts.footer')
	<script>
		var pagina = document.getElementById("sobre");
		pagina.classList.add("active");
	</script>
@stop