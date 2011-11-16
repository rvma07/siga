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

	$('#acordeon_teste').msAccordion();
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