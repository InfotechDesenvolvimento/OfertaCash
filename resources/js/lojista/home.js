$(document).ready(function() {
	let saldoAtual = 0;
	let vale = 0;
	let debito = 0;
	let valor = 0;
	let codVenda = 0;
	let codCliente = 0;
	let cpfCliente = 0;
	let senha = 0;
	let time;
	let ramoAlimento;

	$('#confirmar_senha').css('display', 'none');
	$('#finalizar').css('display', 'none');

    $('#valor_total').maskMoney({
        prefix: "R$:",
        decimal: ",",
        thousands: "."
    });
    $("#cpf").inputmask({
        mask: ["999.999.999-99"],
        keepStatic: true
    });

    $('#buscar').click(function () {
        let id = $("#id").val();
		let cpf = $("#cpf").val();
		valor = $("#valor_total").val();

        valor = valor.replace('R$:','');
        valor = valor.replace('.','');
        valor = valor.replace(',','.');

		if (valor > 0) {
			$('#erro-valor').css("display", "none");
		}
		else {
			$('#erro-valor').css("display", "block");
		}

		if (id != "" || cpf != "") {
			$('#erro-cpf-id').css("display", "none");
		}
		else {
			$('#erro-cpf-id').css("display", "block");
		}

		if ((id != "" || cpf != "") && valor > 0) {
			$.ajax({
				url: "../api/cliente",
				data: {
					codigo: id,
					cpf: cpf
				},
				dataType: "json",
				type: "POST",
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					bootbox.alert("Não foi possível consultar o cliente. Tente novamente!")
				}
			})
				.done(function (data) {
					if (data == null) {
						$('#erro-cliente').css("display", "block");
					} else {
						saldoAtual = data["SALDO_ATUAL"];
						vale = data["SALDO_VALE"];
						debito = data["SALDO_DEBITO"];

						if(vale == null) {
							vale = 0;
						}

						if(debito == null) {
							debito = 0;
						}

						if(saldoAtual == null) {
							saldoAtual = 0;
						}

						codCliente = data["codigo"];
						cpfCliente = data["cpf_cnpj"];
						
                        $('#codigo_cliente').val(data["codigo"]);
						$('#nome_cliente').val(data["nome"]);
						$('#data_cliente').val(data["data_nasc"]);
						$('#cpf_cliente').val(data["cpf_cnpj"]);

						$('#erro-saldo').css("display", "none");
						$('#info-cliente').css("display", "block");
						$('#buscar').css("display", "none");

						if (data["CONTA_ATIVA"] != 'S') {
							$('#erro-ativada').css("display", "block");
							$('#confirmar_cliente').attr("disabled", "true");
							$('#buscar').css("display", "block");
						}
						document.getElementById("info-cliente").scrollIntoView();
					}
				});
		}
    });

	$('#confirmar_cliente').click(function () {
		let flag = false;
		let ramo_alimenticio = $("#ramo_alimenticio").val();
		ramoAlimento = ramo_alimenticio;

		saldoAtual = parseFloat(saldoAtual);
		vale = parseFloat(vale);
		valor = parseFloat(valor);
		debito = parseFloat(debito);

		if (ramo_alimenticio == 'S') {
			if(vale >= valor) {
				flag = true;
				$('#erro-saldo').css("display", "none");
			}
			else if(((saldoAtual + vale + debito) >= valor)) {
				flag = true;
				$('#erro-saldo').css("display", "none");
			} else {
				flag = false;
				$('#erro-saldo').css("display", "block");
			}
		} else {
			if ((saldoAtual + debito) >= valor) {
				flag = true;
				$('#erro-saldo').css("display", "none");
			} else {
				flag = false;
				$('#erro-saldo').css("display", "block");
			}
		}

		if (flag) {
			$('#forma_pagamento').empty();
			let comboPag = document.getElementById("forma_pagamento");

			//adiciona as opções
			let op;
			let preco;

			for (let i = 0; i < 10; i++) {
				preco = valor / (i + 1);

				op = document.createElement("option");
				op.value = (i + 1);
				op.text = (i + 1) + " x R$ " + preco.toFixed(2);
				comboPag.add(op, comboPag.options[i]);
			}

			$('#info-pagamento').css("display", "block");
			$('#confirmar_senha').css("display", "block");
			$('#confirmar_cliente').css("display", "none");

			document.getElementById("info-pagamento").scrollIntoView();
			document.getElementById("forma_pagamento").focus();
		}

	});

	$('#confirmar_senha').click(function () {
		$('#senha-cliente').css("display", "block");
		$('#confirmar_senha').css("display", "none");
		document.getElementById("senha-cliente").scrollIntoView();
		document.getElementById("senha_cliente").focus();
	});

	$('#cancelar_venda').click(function() {
		$('#erro-cliente').css('display', 'none');
		$('#erro-valor').css('display', 'none');
		$('#erro-saldo').css('display', 'none');
		$('#erro-cpf-id').css('display', 'none');
		$('#erro-ativada').css('display', 'none');
		$('#info-cliente').css('display', 'none');
		$('#info-pagamento').css('display', 'none');
		$('#senha-cliente').css('display', 'none');
		$('#erro_senha').css('display', 'none');
		$('#sucesso_senha').css('display', 'none');
		$('#finalizar').css('display', 'none');
		$('#confirmar_senha').css('display', 'block');
		$('#verificar_senha').css('display', 'block');
		$('#buscar').css('display', 'block');
		$('#confirmar_cliente').css('display', 'block');
		$('#valor_total').val("");
		$('#id').val("");
		$('#cpf').val("");
		$('#senha_cliente').val("");
	});

	$('#finalizar').click(function (e) {
		bootbox.confirm({
			title: "Finalizar",
			message: "Deseja realmente finalizar a venda?",
			buttons: {
				cancel: {
					label: '<i class="fa fa-times"></i> Não'
				},
				confirm: {
					label: '<i class="fa fa-check"></i> Sim'
				}
			},
			callback: function (result) {
				if (result == true) {
					$.ajax({
						url: "../api/cliente",
						data: {
							codigo: codCliente,
							cpf: ""
						},
						dataType: "json",
						type: "POST",
						error: function (XMLHttpRequest, textStatus, errorThrown) {
							bootbox.alert('Erro inesperado. Verifique sua conexão!');
						}
					})
						.done(function (data) {
							saldoAtual = data["SALDO_ATUAL"];
							vale = data["SALDO_VALE"];
							debito = data["SALDO_DEBITO"];
							let flag = false;
							saldoAtual = parseFloat(saldoAtual);
							vale = parseFloat(vale);
							valor = parseFloat(valor);
							debito = parseFloat(debito);

							if (ramoAlimento == 'S') {
								if (vale >= valor) {
									flag = true;
								}
								else if((saldoAtual + vale + debito) >= valor) {
									flag = true;
								}
								else {
									flag = false;
									$('#erro-saldo').css("display", "block");
								}
							} else {
								if ((saldoAtual + debito) >= valor) {
									flag = true;
								}
								else {
									flag = false;
									$('#erro-saldo').css("display", "block");
								}
							}

							if (!flag) {
								bootbox.alert("Cliente com saldo insuficiente !");
								$('#finalizar').css("display", "none");
								$('#load4').css("display", "none");
							} else {
								//SELECIONA A VENDA E VERIFICA SE A MESMA FOI REALMENTE CONFIRMADA
								$.ajax({
									url: "../api/consultar_venda",
									data: {
										codigo: codVenda
									},
									dataType: "json",
									type: "POST",
									error: function (XMLHttpRequest, textStatus, errorThrown) {
										bootbox.alert('Erro inesperado. Verifique sua conexão!');
									}
								})
									.done(function (data2) {
										if (data == "não") {
											$('#aviso').css("background-color", "#f2dede");
											$('#aviso').css("border-color", "#ebccd1");
											$('#aviso').css("color", "#a94442");
											$('#aviso').html("Erro ao selecionar a venda !");
											$('#aviso').css("display", "block");
										} else {
											if (data2["CONFIRMADO"] == 'N') {
											} else {
												$.ajax({
													url: "../api/finalizar_venda",
													data: {
														codigo: codVenda,
														confirmacao: 'SENHA'
													},
													dataType: "json",
													type: "POST",
													error: function (XMLHttpRequest, textStatus, errorThrown) {
														bootbox.alert('Erro inesperado. Verifique sua conexão!');
													}
												})
													.done(function (data3) {
														if (data3) {
															bootbox.alert("Venda finalizada com sucesso! Tente novamente!");
															cancelar();
														} else {
															bootbox.alert("Não foi possível finalizar a venda ! Tente novamente!");
															cancelar();
														}

													});
											}
										}
										$('#load4').css("display", "none");
									});
							}
						});
				}
			}
		});
	});

	$('#verificar_senha').click(function () {
		 senha = $('#senha_cliente').val();

		 $.ajax({
			url: "../api/confirmar_cliente",
			data: {
				codigo: codCliente,
				senha_usuario: senha
			},
			dataType: "json",
			type: "POST",
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				bootbox.alert('Erro inesperado. Verifique sua conexão!');
			}
		})
			.done(function (data) {
				if (data != true) {
					$('#erro_senha').css('display', 'block');
				} else {
					let numParcelas =$('#forma_pagamento').val();
					let codLojista = $('#codigo_lojista').val();
					let nomeLojista = $('#nome_lojista').val();
					$('#erro_senha').css('display', 'none');


					$.ajax({
						url: "../api/registrar_venda",
						data: {
							codCliente: codCliente,
							cpfCliente: cpfCliente,
							valorTotal: valor,
							saldoAnterior: saldoAtual,
							numParcelas: numParcelas,
							codLojista: codLojista,
							nomeLojista: nomeLojista,
							ramoAlimento: ramoAlimento
						},
						dataType: "json",
						type: "POST",
						error: function (XMLHttpRequest, textStatus, errorThrown) {
							bootbox.alert('Erro inesperado. Verifique sua conexão!');
						}
					})
						.done(function (data) {
							if (data == null) {
							} else {
								$('#sucesso_senha').css('display', 'block');
								codVenda = data["CODIGO"];
								$('#verificar_senha').css('display', 'none');
								$('#finalizar').css('display', 'block');
							}
						});
				}
			});
	});
	
	function cancelar() {
		$('#erro-cliente').css('display', 'none');
		$('#erro-valor').css('display', 'none');
		$('#erro-saldo').css('display', 'none');
		$('#erro-cpf-id').css('display', 'none');
		$('#erro-ativada').css('display', 'none');
		$('#info-cliente').css('display', 'none');
		$('#info-pagamento').css('display', 'none');
		$('#senha-cliente').css('display', 'none');
		$('#erro_senha').css('display', 'none');
		$('#sucesso_senha').css('display', 'none');
		$('#finalizar').css('display', 'none');
		$('#confirmar_senha').css('display', 'block');
		$('#verificar_senha').css('display', 'block');
		$('#buscar').css('display', 'block');
		$('#confirmar_cliente').css('display', 'block');
		$('#valor_total').val("");
		$('#id').val("");
		$('#cpf').val("");
		$('#senha_cliente').val("");
	}

});