$(function(){
    
    $('#tabela').DataTable( {
        "pagingType": "simple_numbers",
        "lengthChange": false,
         "language": {
            "sEmptyTable": "Nenhum registro encontrado",
    		"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    		"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    		"sInfoFiltered": "(Filtrados de _MAX_ registros)",
    		"sInfoPostFix": "",
    		"sInfoThousands": ".",
    		"sLengthMenu": "_MENU_ resultados por página",
    		"sLoadingRecords": "Carregando...",
    		"sProcessing": "Processando...",
    		"sZeroRecords": "Nenhum registro encontrado",
    		"sSearch": "Pesquisar",
    		"oPaginate": {
	        	"sNext": "Próximo",
	        	"sPrevious": "Anterior",
	        	"sFirst": "Primeiro",
	        	"sLast": "Último"
    		},
		    "oAria": {
		        "sSortAscending": ": Ordenar colunas de forma ascendente",
		        "sSortDescending": ": Ordenar colunas de forma descendente"
		    }
        },
        bFilter: false,
        responsive: true,
    });

    buscar();

    $('#cpf_cliente').keypress(function(){
        let c = document.getElementById('cpf_cliente').value;

        if(c.length == 3 || c.length == 7){
            c = c + ".";
        } else if (c.length == 11){
            c = c + "-";
        }

        document.getElementById('cpf_cliente').value = c;
    });

    $( "#data" ).datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    }).datepicker("setDate", new Date());

    $( "#data2" ).datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    }).datepicker("setDate", new Date());


    function buscar(){

        let data_inicial = document.getElementById("data").value;
        let data_final = document.getElementById("data2").value;
        let cod_lojista = document.getElementById("cod_lojista").value;
        let cpf_cliente = document.getElementById("cpf_cliente").value;
        let tipo = document.getElementById("tipo").value;

        let table = $('#tabela').DataTable();

            $.ajax({
                url: "../api/listar_estornos/aprovados",
                data: {
                    cod_lojista: cod_lojista,
                    tipo: tipo,
                },
                dataType: "json",
                type: "POST",
                error: function(XMLHttpRequest, textStatus, errorThrown){
                    bootbox.alert('Erro inesperado. Verifique sua conexão!');
                }
            })
            .done(function(data){

                let tam = data.length;
                let estornos = "";
                let valor;
                let data_convert;
                let mes;
                let dia;
                let ano;
                let total = 0;
                let i;

                for(i = 0; i < tam; i++){
                    estornos = estornos + "<tr>";

                    ano = data[i].DATA_VENDA.substring(0, 4);
                    mes = data[i].DATA_VENDA.substring(5,7);
                    dia = data[i].DATA_VENDA.substring(8, 10);
                    data_convert = dia + "/" + mes + "/" + ano;

                    estornos = estornos + "<td> " + data_convert + " </td>";

                    valor = parseFloat(data[i].VALOR_VENDA);
                    total = total + valor;
                    estornos = estornos + "<td>" + valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}) + "</td>";

                    estornos = estornos + "<td> " + data[i].cpf_cnpj + " </td>";
                        if(data[i].OBSERVAVAO_MOTIVO != null){
                            estornos = estornos + "<td> " + data[i].OBSERVAVAO_MOTIVO.toUpperCase() + " </td>";
                        }
                        else{
                            estornos = estornos + "<td> </td>";
                        }
                    estornos = estornos + "</tr>";
                }

                table.destroy();
                $("#tabela tbody").html(estornos);
                table=$('#tabela').DataTable({
                    "pagingType": "simple_numbers",
                    "lengthChange": false,
                     "language": {
                        "sEmptyTable": "Nenhum registro encontrado",
                        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "_MENU_ resultados por página",
                        "sLoadingRecords": "Carregando...",
                        "sProcessing": "Processando...",
                        "sZeroRecords": "Nenhum registro encontrado",
                        "sSearch": "Pesquisar",
                        "oPaginate": {
                            "sNext": "Próximo",
                            "sPrevious": "Anterior",
                            "sFirst": "Primeiro",
                            "sLast": "Último"
                        },
                        "oAria": {
                            "sSortAscending": ": Ordenar colunas de forma ascendente",
                            "sSortDescending": ": Ordenar colunas de forma descendente"
                        }
                    },
                    bFilter: false,
                    responsive: true,
                });

                //document.getElementById("num_vendas").innerHTML = i;
                //document.getElementById("num_total").innerHTML = parseFloat(total).toLocaleString('pt-br', {style:'currency', currency:'BRL'});
                $('#load').css("display", "none");             
            });
    }

    $('#buscar').click(function(e){
        buscar();        
    });

    $("#limpar").click(function(){
        $('#cpf_cliente').val("");
        $('#data').datepicker("setDate", new Date());
        $('#data2').datepicker("setDate", new Date());

        document.getElementById('cpf_cliente').focus();
    });
});