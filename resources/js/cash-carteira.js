function menos(){
	var formato = { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' };

	dinheiro = document.getElementById("simulacao-dinheiro").value.replace('R$ ','');

	//console.log(dinheiro);
	
	if(dinheiro == "30,000.00" || dinheiro == "30.000,00") {
		dinheiro = 30;
	} else {
		dinheiro = parseInt(dinheiro) * 1;
		dinheiro = format2((dinheiro*1000)-1000, '');

		//dinheiro = dinheiro.toLocaleString('pt-BR', formato);
		document.getElementById("simulacao-dinheiro").value = dinheiro;
	}
}

function mais(){
	var formato = { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' };

	dinheiro = document.getElementById("simulacao-dinheiro").value.replace('R$ ','');
	
	if(dinheiro.length == 12) {
		dinheiro = 30;
	}

	dinheiro = parseInt(dinheiro) * 1;
	dinheiro = format2((dinheiro*1000)+1000, '');

	//console.log(dinheiro);

	//dinheiro = dinheiro.toLocaleString('pt-BR', formato);
	document.getElementById("simulacao-dinheiro").value = dinheiro;

	//dinheiro = dinheiro.toLocaleString('pt-BR', formato);
/*	console.log(dinheiro);

	soma = parseInt(1000);
	soma = parseInt(dinheiro)*1000 + soma;

	console.log(soma);

	dinheiro = soma;
	document.getElementById("simulacao-dinheiro").value = "R$ " + dinheiro + ",00";

	document.write(format2(30000+1000, '$') + '<br />')*/;

/*	let dinheiro_formatado = dinheiro.split(',')[0];
	let tamanho = dinheiro.length;
	//alert(dinheiro.length);

	dinheiro = dinheiro.replaceAll(' ','');
	
	dinheiro = dinheiro.toLocaleString('pt-BR', formato);
	dinheiro = parseFloat(dinheiro);

	//alert(dinheiro);

	dinheiro = dinheiro + 1;

	if(tamanho == 9) {
		dinheiro = dinheiro * 1000;
	} else if (tamanho == 10) {
		dinheiro = dinheiro * 10000;
	}

	//dinheiro = dinheiro * 1000;
	dinheiro = parseFloat(dinheiro);

	if(dinheiro <= 3000000) {
		dinheiro = dinheiro.toLocaleString('pt-BR', formato);
		document.getElementById("simulacao-dinheiro").value = dinheiro;
	} else {
		let money = 30000;
		dinheiro = money.toLocaleString('pt-BR', formato);
		document.getElementById("simulacao-dinheiro").value = dinheiro;
	}*/
}

function format2(n, currency) {
  return currency + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
}
