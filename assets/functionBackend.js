$(function(){

    $("#menu ul li a").hover(function(){
          $(this).addClass('ui-state-hover');
    },function(){
          $(this).removeClass();
    })
    $("#menuprincipal li").last().css('border-right','none');
    $("#menuprincipal li").first().css('border-left','none');
    $('#logout').hover(
        function() {$(this).addClass('ui-state-hover');},
        function() {$(this).removeClass('ui-state-hover');}
    );
    $('input, textarea, select').addClass('text ui-widget-content ui-corner-all');


    $("input:submit, .search-button").button();

     $.datepicker.setDefaults({dateFormat: 'dd/mm/yy',
                  dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                  dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab','Dom'],
                  dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                  monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro', 'Outubro','Novembro','Dezembro'],
                  monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set', 'Out','Nov','Dez'],
                  nextText: 'Próximo',
                  prevText: 'Anterior'
                 });

    $('input[rel="data"]').datepicker({
        inline: true
     });

    $('input[rel="telefone"]').setMask({mask:'(99) 9999-9999'});
    $('input[rel="moeda"]').setMask({mask:'99,9999999', type:'reverse'});
    $('input[rel="int"]').setMask({mask:'9999999', type:'reverse'});
    $('input[rel="cpf"]').setMask({mask:'999.999.999-99'});
    $('input[rel="cnpj"]').setMask({mask:'99.999.999/9999-99'});
    $('input[rel="cep"]').setMask({mask:'99999-999'});
    $('input[rel="cep"]').blur(function(){
        if($.trim($('input[rel="cep"]').val()) != ""){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$('input[rel="cep"]').attr('value'), function(){
                if (resultadoCEP["tipo_logradouro"] != '') {
                    if (resultadoCEP["resultado"]) {
                        $("input[rel='rua']").attr('value',unescape(resultadoCEP["tipo_logradouro"]) + ": " + unescape(resultadoCEP["logradouro"]));
                        $("input[rel='bairro']").attr('value',unescape(resultadoCEP["bairro"]));
                        $("input[rel='cidade']").attr('value',unescape(resultadoCEP["cidade"]));
                        $("input[rel='uf']").attr('value',unescape(resultadoCEP["uf"]));
                        $("input[rel='numero']").focus();
                    }
					
                }});
        }
    });
	$('#acordeon_teste').msAccordion();
	
	$('.unidade_chamada select').change(function(){
		
		$('.ano_chamada').load('/sisadm/chamada/carregaano',{ 'id_unidade' : $(this).attr('value')});
	});
	
});
 function atualizarfoto(){
                 $.ajax({
                      type: "get",
                      url: "/sisadm/upload/ajaxfoto",
                      success: function(arquivo){
                           $("ul#fotos").prepend('<li style="display:none;"><img src="/fotos/'+arquivo+'" width="306" height="230" alt="Fotos"/></li>');
                           $("ul#fotos li").first().fadeIn("slow");
                      }
                  });

            }