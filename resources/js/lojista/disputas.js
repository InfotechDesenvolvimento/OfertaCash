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

       let situacao = document.getElementById("situacao").value;
       let cod_cliente = null;

       if ($("#cod_cliente").length) {
           cod_cliente = document.getElementById("cod_cliente").value;
       }
       let cod_lojista = null;

       if($("#cod_lojista").length){
           cod_lojista = document.getElementById("cod_lojista").value;
       }

       let tipo = document.getElementById("tipo").value;
       let table = $('#tabela').DataTable();

       $.ajax({
           url: "../api/disputas",
           data: {
               cod_cliente: cod_cliente,
               cod_status: situacao,
               cod_lojista, cod_lojista,
               tipo: tipo
           },
           dataType: "json",
           type: "POST",
           error: function(XMLHttpRequest, textStatus, errorThrown){
               bootbox.alert('Erro inesperado. Verifique sua conexão!');
              }
       })
       .done(function(data){
           let tam = data.length;
           let disputas = "";
           let i;

           for(i = 0; i < tam; i++){
               disputas = disputas + "<tr>";
               disputas = disputas + "<td>";
               disputas = disputas + "<a href='info_disputa.php?id=" + data[i].CODIGO + "' style='margin-left: 10px;' title='Informações' target='_blank'><i class='fa fa-info-circle fa-lg'></i></a>";
               disputas = disputas + "</td>";
               if(tipo == 1){
                   disputas = disputas + "<td>" + data[i].LOJISTA + "</td>";
               } else {
                   disputas = disputas + "<td>" + data[i].CPF_CLIENTE + "</td>";
               }
               disputas = disputas + "<td>R$ " + data[i].VALOR_TOTAL + "</td>";
               disputas = disputas + "<td>" + data[i].DATA_INICIO + "</td>";
               disputas = disputas + "<td class='btn redondo redondoFont '> " + data[i].STATUS + "</td>";
               disputas = disputas + "</tr>";
           }

           table.destroy();
           $("#tabela tbody").html(disputas);
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

           //document.getElementById("num_disputas").innerHTML = i;

           $('#load').css("display", "none");
       });
   });
});

$(document).ready(function(){
   let tipo = document.getElementById("tipo").value;

   $.ajax({
       url: "../api/situacoes_disputa",
       data: {},
       dataType: "json",
       type: "POST",
       error: function(XMLHttpRequest, textStatus, errorThrown){
           bootbox.alert('Erro inesperado. Verifique sua conexão!');
       }
   })
   .done(function(data){
       let comboSituacao = document.getElementById("situacao");

       while(comboSituacao.length){
           comboSituacao.remove(0);
       }

       let op;

       op = document.createElement("option");
       op.value = 0;
       op.text = "--";
       comboSituacao.add(op, comboSituacao.options[0]);

       for(i = 1; i <= data.length; i++){
           op = document.createElement("option");
           op.value = data[i-1].CODIGO;
           op.text = data[i-1].STATUS;
           comboSituacao.add(op, comboSituacao.options[i]);
       }
   });
});