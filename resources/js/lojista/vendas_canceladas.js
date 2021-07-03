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
       

   $('#buscar').click(function(){
       
        $('#load').css("display", "inline-block");
        let table = $('#tabela').DataTable();
        cod_lojista = $('#cod_lojista').val();

        $.ajax({
            url: "../api/listar_vendas/canceladas",
            data:{
                cod_lojista: cod_lojista
            },
            dataType:"json",
            type: "POST",
            error: function(XMLHttpRequest, textStatus, errorThrown){
                bootbox.alert('Erro inesperado. Verifique sua conexão!');
            }
        })
        .done(function(data){
            let tam = data.length;
            let empresas = "";
            let i;

            for(i = 0; i < tam; i++){
                empresas = empresas + "<tr>";
                empresas = empresas + "<td>" + formatarData(data[i].DATA_VENDA) + "</td>";
                empresas = empresas + "<td>" + data[i].VALOR_TOTAL + "</td>";
                empresas = empresas + "<td>" + data[i].cliente.nome + "</td>";
                empresas = empresas + "<td>" + data[i].CPF_CLIENTE  + "</td>";
                empresas = empresas + "</tr>"; 
            }
            
            table.destroy();
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
            $("#tabela tbody").html(empresas);

            $('#load').css("display", "none");
        });
   });

    function formatarData(data) {
        return data.substring(8,10) + '/' + data.substring(5,7) + '/' + data.substring(0, 4);
    }
       
});