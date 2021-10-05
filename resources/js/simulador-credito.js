var valor = 10000;

function menos(){
	var formato = { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' };

	dinheiro = document.getElementById("simulacao-dinheiro").value;
	dinheiro = parseInt(dinheiro);

	if(dinheiro > 100) {
		if(dinheiro < 1000) {
			dinheiro = dinheiro - 100;
		} else {
			dinheiro = dinheiro - 1000;
		}
	} else {
		dinheiro = 100;
	}

	dinheiro = dinheiro.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});

	document.getElementById("simulacao-dinheiro").value = dinheiro;
}

function mais(){
	var formato = { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' };

	dinheiro = document.getElementById("simulacao-dinheiro").value;
	dinheiro = parseInt(dinheiro);

	if(dinheiro < valor) {
		if(dinheiro < 1000) {
			dinheiro = dinheiro + 100;
		} else {
			dinheiro = dinheiro + 1000;
		}
	} else {
		dinheiro = valor;
	}

	dinheiro = dinheiro.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});

	document.getElementById("simulacao-dinheiro").value = dinheiro;
}

function format2(n, currency) {
  return currency + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
}

$(document).ready(function(){

	$("#botao-01").click(function() {

		document.getElementById('botao-01').classList.add("my-class");

		//document.getElementById('botao-01').classList.remove("my-class");
		document.getElementById('botao-02').classList.remove("my-class");
		document.getElementById('botao-03').classList.remove("my-class");
		document.getElementById('botao-04').classList.remove("my-class");
		document.getElementById('botao-05').classList.remove("my-class");
		document.getElementById('botao-06').classList.remove("my-class");

		document.getElementById('parcela-de').innerHTML = "Parcela de: ";

		dinheiro = document.getElementById("simulacao-dinheiro").value;
		dinheiro = parseInt(dinheiro);

		if(dinheiro < 100 || dinheiro > 50000) {
			dinheiro = parseInt(100);

			document.getElementById("simulacao-dinheiro").value = dinheiro.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});
		}

		dinheiro = dinheiro + (dinheiro * 0.06);

		dinheiro = dinheiro.toLocaleString("br",{ minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
		
		document.getElementById('valor-simulacao').innerHTML = dinheiro;
	});

	$("#botao-02").click(function() {

		document.getElementById('botao-02').classList.add("my-class");

		document.getElementById('botao-01').classList.remove("my-class");
		//document.getElementById('botao-02').classList.remove("my-class");
		document.getElementById('botao-03').classList.remove("my-class");
		document.getElementById('botao-04').classList.remove("my-class");
		document.getElementById('botao-05').classList.remove("my-class");
		document.getElementById('botao-06').classList.remove("my-class");

		document.getElementById('parcela-de').innerHTML = "Parcelas de: ";

		dinheiro = document.getElementById("simulacao-dinheiro").value;
		dinheiro = parseInt(dinheiro);

		if(dinheiro < 100 || dinheiro > 50000) {
			dinheiro = 100;
			document.getElementById("simulacao-dinheiro").value = 
			dinheiro.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});
		}

		dinheiro = (dinheiro / 2) + (dinheiro * 0.06);

		dinheiro = dinheiro.toLocaleString("br",{ minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
		
		document.getElementById('valor-simulacao').innerHTML = dinheiro;
	});

	$("#botao-03").click(function() {

		document.getElementById('botao-03').classList.add("my-class");

		document.getElementById('botao-01').classList.remove("my-class");
		document.getElementById('botao-02').classList.remove("my-class");
		//document.getElementById('botao-03').classList.remove("my-class");
		document.getElementById('botao-04').classList.remove("my-class");
		document.getElementById('botao-05').classList.remove("my-class");
		document.getElementById('botao-06').classList.remove("my-class");

		document.getElementById('parcela-de').innerHTML = "Parcelas de: ";

		dinheiro = document.getElementById("simulacao-dinheiro").value;

		dinheiro = parseInt(dinheiro);

		if(dinheiro < 100 || dinheiro > 50000) {
			dinheiro = 100;
			document.getElementById("simulacao-dinheiro").value = 
			dinheiro.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});
		}

		dinheiro = (dinheiro / 3) + (dinheiro * 0.06);

		dinheiro = dinheiro.toLocaleString("br",{ minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
		
		document.getElementById('valor-simulacao').innerHTML = dinheiro;
	});

	$("#botao-04").click(function() {

		document.getElementById('botao-04').classList.add("my-class");

		document.getElementById('botao-01').classList.remove("my-class");
		document.getElementById('botao-02').classList.remove("my-class");
		document.getElementById('botao-03').classList.remove("my-class");
		//document.getElementById('botao-04').classList.remove("my-class");
		document.getElementById('botao-05').classList.remove("my-class");
		document.getElementById('botao-06').classList.remove("my-class");

		document.getElementById('parcela-de').innerHTML = "Parcelas de: ";

		dinheiro = document.getElementById("simulacao-dinheiro").value;

		dinheiro = parseInt(dinheiro);

		if(dinheiro < 100 || dinheiro > 50000) {
			dinheiro = 100;
			document.getElementById("simulacao-dinheiro").value = 
			dinheiro.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});
		}

		dinheiro = (dinheiro / 4) + (dinheiro * 0.06);

		dinheiro = dinheiro.toLocaleString("br",{ minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
		
		document.getElementById('valor-simulacao').innerHTML = dinheiro;
	});

	$("#botao-05").click(function() {

		document.getElementById('botao-05').classList.add("my-class");

		document.getElementById('botao-01').classList.remove("my-class");
		document.getElementById('botao-02').classList.remove("my-class");
		document.getElementById('botao-03').classList.remove("my-class");
		document.getElementById('botao-04').classList.remove("my-class");
		//document.getElementById('botao-05').classList.remove("my-class");
		document.getElementById('botao-06').classList.remove("my-class");

		document.getElementById('parcela-de').innerHTML = "Parcelas de: ";

		dinheiro = document.getElementById("simulacao-dinheiro").value;

		dinheiro = parseInt(dinheiro);

		if(dinheiro < 100 || dinheiro > 50000) {
			dinheiro = 100;
			document.getElementById("simulacao-dinheiro").value = 
			dinheiro.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});
		}

		dinheiro = (dinheiro / 5) + (dinheiro * 0.06);

		dinheiro = dinheiro.toLocaleString("br",{ minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
		
		document.getElementById('valor-simulacao').innerHTML = dinheiro;
	});

	$("#botao-06").click(function() {

		document.getElementById('botao-06').classList.add("my-class");

		document.getElementById('botao-01').classList.remove("my-class");
		document.getElementById('botao-02').classList.remove("my-class");
		document.getElementById('botao-03').classList.remove("my-class");
		document.getElementById('botao-04').classList.remove("my-class");
		document.getElementById('botao-05').classList.remove("my-class");
		//document.getElementById('botao-06').classList.remove("my-class");

		document.getElementById('parcela-de').innerHTML = "Parcelas de: ";

		dinheiro = document.getElementById("simulacao-dinheiro").value;

		dinheiro = parseInt(dinheiro);

		if(dinheiro < 100 || dinheiro > 50000) {
			dinheiro = 100;
			document.getElementById("simulacao-dinheiro").value = 
			dinheiro.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});
		}

		dinheiro = (dinheiro / 6) + (dinheiro * 0.06);

		dinheiro = dinheiro.toLocaleString("br",{ minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
		
		document.getElementById('valor-simulacao').innerHTML = dinheiro;
	});

});