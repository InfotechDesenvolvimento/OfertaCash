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

    function buscar(){

        $('#load').css("display", "inline-block");
        let cod_cliente = parseInt($("#cod_cliente").val());

        let table = $('#tabela').DataTable();

        $.ajax({
            url: "../api/extrato/cliente",
            data: {
                cod_cliente: cod_cliente
            },
            dataType: "json",
            type: "POST",
            error: function(XMLHttpRequest, textStatus, errorThrown){
                bootbox.alert('Erro inesperado. Verifique sua conexão!');
            }
        })
        .done(function(data){
            console.log(data);

            let tam = data.length;
            let vendas = "";
            let valor, parcelas;
            let data_convert;
            let mes;
            let dia;
            let ano;
            let total = 0, total_back = 0;
            let i;

            for(i = 0; i < tam; i++){
                vendas = vendas + "<tr>";

                vendas = vendas + "<td>";
                vendas = vendas + "<a href='disputa.php?id=" + data[i].codigo + "' style='margin-left: 10px; color: green;' title='Disputa' target='_blank' id=" + data[i].codigo + "><i class='fa fa-exchange fa-lg'></i></a>";
               // vendas = vendas + "<a href='#' style='margin-left: 10px; color: green;' title='Disputa' id=" + data[i].codigo + "><i class='fa fa-exchange fa-lg'></i></a>";
                vendas = vendas + "</td>";

                vendas = vendas + "<td> " + data[i].dataVenda + " </td>";
                vendas = vendas + "<td> " + data[i].nomeLojista + " </td>";

                valor = parseFloat(data[i].valorTotal);
                parcelas = valor / data[i].numParcelas;
                total = total + valor;
                vendas = vendas + "<td>" + valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}) + "</td>";
                vendas = vendas + "<td>" + data[i].numParcelas + " x " + parcelas.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}) + "</td>";

                vendas = vendas + "<td> " + data[i].percentual + "%</td>";
                valor = parseFloat(data[i].valorPayBack);
                total_back = total_back + valor;
                vendas = vendas + "<td> " + valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}) + "</td>";
                vendas = vendas + "</tr>" 
            }

            table.destroy();
            $("#tabela tbody").html(vendas);
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

           // document.getElementById("num_vendas").innerHTML = i;
           // document.getElementById("num_total").innerHTML = parseFloat(total).toLocaleString('pt-br', {style:'currency', currency:'BRL'});
           // document.getElementById("num_total_back").innerHTML = parseFloat(total_back).toLocaleString('pt-br', {style:'currency', currency:'BRL'});
            
            $('#load').css("display", "none");
        });
    }

    $('#getPagamentos').submit(function(e){
         e.preventDefault();
    });

    $('#buscar').click(function(e){
        buscar();        
    });

    $("#limpar").click(function(){
        $('#data').datepicker("setDate", new Date());
        $('#data2').datepicker("setDate", new Date());

        document.getElementById('data').focus();
    });
});