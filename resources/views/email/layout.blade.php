<!DOCTYPE html>
<html>
<head>
    <title>OfertaCash</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');

	@media screen and (max-width: 480px) {
	    #texto-rodape {
	    	padding:  20px !important;
	    }

	    #rodape {
	    	height: 80px !important;
	    }

	    #header {
	    	padding-top:20px !important;
	    }

	    #titulo {
	    	padding-top: 0px !important;
	    }
	}
</style>
<body style="margin: 0px; padding: 0px; background-color: transparent;">
	<div style="height: 90px; background-color: #e4eff7; width: 100%; text-align: center; margin:0; margin-bottom: 40px;" id="header">
		<center>
 			<img src="http://ofertacash.com.br/resources/images/logo_ofertacash2.png" style="height: 90px; width: auto; text-align: center;" id="imagem">
			<!-- <h1 style="vertical-align: middle; color: white; font-family: 'Poppins', sans-serif; padding-top: 20px;" id="titulo">
				OfertaCash</span>
			</h1> -->
		</center>
	</div>
	<p style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; text-align: center; margin-bottom: 10px">Você recebeu uma nova mensagem!</p>
	<p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 300; text-align: center;">
	 "{{ $mensagem }}"
	</p>
	<p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 300; text-align: center;">
	 De {{ $nome }} ({{ $emailfrom }})
	</p>
	<p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 300; text-align: center;">
	 No dia {{ $data }} ás {{ $hora }}
	</p>

    <p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 300; text-align: center;">Atenciosamente, OfertaCash.</p>

    <div style="height: 60px; background-color: #e4eff7; width: 100%; text-align: center; margin:0; padding:0; margin-top: 40px;" id="rodape">
		<p style="color: #0b0b48; text-align: center; padding-top: 20px; padding-bottom: 20px; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400;" id="texto-rodape">Oferta Cash - Soluções Financeiras e Comerciais.</p>
	</div>
</body>
</html>