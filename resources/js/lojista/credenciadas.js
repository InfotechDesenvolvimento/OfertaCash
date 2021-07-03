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

   function selecionarCidades() {
       let codEstado = document.getElementById("estados").value;
       let cidadeClienteCodigo = document.getElementById("cidadeClienteCodigo").value;
       let cidadeCliente = document.getElementById("cidadeCliente").value;

       $.ajax({
           url: "../api/cidades",
           data:{
               codUF: codEstado,
           },
           dataType: "json",
           type: "POST",
           error: function(XMLHttpRequest, textStatus, errorThrown){
               bootbox.alert('Erro inesperado. Verifique sua conexão!');
           }
       })
       .done(function(data){
           let comboCidades = document.getElementById("cidades");

           while(comboCidades.length){
               comboCidades.remove(0);
           }

           let op;
           op = document.createElement("option");
           op.value = cidadeClienteCodigo;
           op.text = cidadeCliente;
           comboCidades.add(op, comboCidades.options[0]);

           for(let i = 1; i <= data.length; i++){
               op = document.createElement("option");
               op.value = data[i-1].codigo;
               op.text = data[i-1].cidade;
               comboCidades.add(op, comboCidades.options[i]);
           }
       });	
   }

   //Função que lista as cidades referente ao estado do usuario logado
   function ListarCidades(){
       let codEstado = document.getElementById("ufClienteCodigo").value;
       let cidadeCliente = document.getElementById("cidadeCliente").value;
       let cidadeClienteCodigo = document.getElementById("cidadeClienteCodigo").value;

       $.ajax({
           url: "../api/cidades",
           data:{
               codUF: codEstado,
           },
           dataType: "json",
           type: "POST",
           error: function(XMLHttpRequest, textStatus, errorThrown){
               bootbox.alert('Erro inesperado. Verifique sua conexão!');
           }
       })
       .done(function(data){
           let comboCidades = document.getElementById("cidades");

           while(comboCidades.length){
               comboCidades.remove(0);
           }

           let op;

           op = document.createElement("option");
           op.value = cidadeClienteCodigo;
           op.text = cidadeCliente;
           comboCidades.add(op, comboCidades.options[0]);

           for(let i = 1; i <= data.length; i++){ 
               if(data[i-1].codigo != cidadeClienteCodigo) {
                    op = document.createElement("option");
                    op.value = data[i-1].CODIGO;
                    op.text = data[i-1].cidade;
                    comboCidades.add(op, comboCidades.options[i]);
               }
           }
       });	
   }

   function selecionarRamoAtividade(){
           
       $.ajax({
           url: "../api/ramos",
           dataType: "json",
           type: "POST",
           error: function(XMLHttpRequest, textStatus, errorThrown){
               bootbox.alert('Erro inesperado. Verifique sua conexão!');
           }
       })
       .done(function(data){
           let ramoAtividade = document.getElementById("categoria");

           while(ramoAtividade.length){
               ramoAtividade.remove(0);
           }

           let op;

           op = document.createElement("option");
           op.value = 0;
           op.text = "Todas";
           ramoAtividade.add(op, ramoAtividade.options[0]);

           for(let i = 1; i <= data.length; i++){
           
               op = document.createElement("option");
               op.value = data[i-1].CODIGO;
               op.text = data[i-1].RAMO_ATIVIDADE;
               ramoAtividade.add(op, ramoAtividade.options[i]);
           }
       });	
   }

   $('#estados').change(function(){
       selecionarCidades();
   });


   $('#estados').change(function(){
       selecionarRamoAtividade();
   });

   $('#pesquisa').submit(function(e){
       e.preventDefault();
   });

   $('#limpar').click(function(e){
       e.preventDefault();

       cancelar();
   });

   function buscar(){

       $('#load').css("display", "inline-block");
       let comboEstados = document.getElementById("estados").value;
       let comboCidades = document.getElementById("cidades").value;
       let ramoAtividade = document.getElementById("categoria").value;
       let cidadeClienteCodigo = document.getElementById("cidadeClienteCodigo").value;
       let table = $('#tabela').DataTable();

       if(comboCidades == 0){
           comboCidades = cidadeClienteCodigo;
       }
       $.ajax({
           url: "../api/credenciadas",
           data:{
               codUF: comboEstados,
               codCidade: comboCidades,
               ramo: ramoAtividade,
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
               if(data[i].nome_fantasia != null){
                   empresas = empresas + "<td>" + data[i].nome_fantasia + "<a href='visualizar.php?id=" + data[i].codigo + "' style='margin-left: 10px;' title='Informações' target='_blank'><i class='fa fa-info-circle fa-lg'></i></a></td>";
               }else{
                   empresas = empresas + "<td>" + data[i].nome + "<a href='visualizar.php?id=" + data[i].codigo + "' style='margin-left: 10px;' title='Informações' target='_blank'><i class='fa fa-info-circle fa-lg'></i></a></td>";
               }
               empresas = empresas + "<td>" + data[i].cidade.cidade + "</td>";
               empresas = empresas + "<td >" + data[i].ramo_atividade.RAMO_ATIVIDADE + "</td>";
               empresas = empresas + "<td>" + data[i].fone1 + "</td>";
               empresas = empresas + "<td>" + data[i].PERCENTUAL_BONUS  + "</td>";
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
   }
       

   $('#buscar').click(function(e){
       e.preventDefault();
       buscar();
   });

   function cancelar(){
       let comboCidades = document.getElementById("cidades");
       let ramo = document.getElementById("categoria");

       let ufCliente = document.getElementById("ufCliente").value;
       let ufClienteCodigo = document.getElementById("ufClienteCodigo").value;
       let cidadeClienteCodigo = document.getElementById("cidadeClienteCodigo").value;

           while(comboCidades.length){
               comboCidades.remove(0);
           }
           while(ramo.length){
               ramo.remove(0);
           }

           $('#estados').ready(function(){
               ListarCidades();
               selecionarRamoAtividade()
           });
       let op;
       let opCat;

       op = document.createElement("option");
       op.value = 0;
       op.text = "Todas";
       comboCidades.add(op, comboCidades.options[0]);

       opCat = document.createElement("option");
       opCat.value = 0;
       opCat.text = "Todas";
       ramo.add(opCat, ramo.options[0]);

       document.getElementById("estados").value = ufClienteCodigo;
       document.getElementById("cidades").value = cidadeClienteCodigo;
   }
   
   $(document).ready(function() {
       let ufCliente = document.getElementById("ufCliente").value;
       let ufClienteCodigo = document.getElementById("ufClienteCodigo").value;
       let cidadeCliente = document.getElementById("cidadeCliente").value;
       let cidadeClienteCodigo = document.getElementById("cidadeClienteCodigo").value;


       $.ajax({
           url: "../api/estados",
           data:{},
           dataType:"json",
           type:"POST",
           error: function(XMLHttpRequest, textStatus, errorThrown){
               bootbox.alert('Erro inesperado. Verifique sua conexão!');
           }
       })
       .done(function(data){
           let comboEstados = document.getElementById("estados");

           while(comboEstados.length){
               comboEstados.remove(0);
           }

           $('#estados').ready(function(){
               ListarCidades();
               selecionarRamoAtividade()
               buscar()
           });

           let op;

           op = document.createElement("option");
           op.value = ufClienteCodigo;
           op.text = ufCliente;
           comboEstados.add(op, comboEstados.options[0]);

           for(let i = 1; i <= data.length; i++){
               op = document.createElement("option");
               op.value = data[i-1].codigo;
               op.text = data[i-1].uf;
               comboEstados.add(op, comboEstados.options[i]);
           }

           

           /*var cliente = $('#nomeCliente').val();
           var ca = document.cookie.split(';');

               for (var i = 0; i < ca.length; i++) {
                   var c = ca[i];

                   while(c.charAt(0) == ' '){
                       c = c.substring(1);
                   }

                   if(c.indexOf(cliente) == 0){
                       var valor = c.substring(cliente.length, c.length);
                       var value = valor.split(',');

                       for(i = 0; i < value.length; i++){
                           if(i==0){
                               var estado = value[i].charAt(1);
                               $('#estados').val(estado);
                               selecionarCidades();
                           } else {
                               var cidade = value[i];
                               $('#cidades').val(cidade);
                           }
                       }

                       buscar();

                       // Data no passado
                       var data = new Date(0000,0,01);
                       // Converte a data para GMT
                       data = data.toGMTString();
                       // Apaga o cookie
                       document.cookie = cliente + '=; expires=' + data + '; path=/';
                   }
               }*/	
       });

       
   });


});




