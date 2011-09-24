$(function(){
     jkmegamenu.definemenu("megaanchor", "megamenu1", "mouseover");
     DD_roundies.addRule('#box-busca,.btncomprar, .btn, .btncomprar-list, #box-itens, #box-carrinho','5px', true);
     DD_roundies.addRule('#left','0px 0px 10px 0px', true);
     $('#email_top').focusin(function(){
     
         if ($('#email_top').attr('value') == 'E-mail'){
         	$('#email_top').val('');
         }
     
     });
     $('#email_top').focusout(function(){
     
         if ($('#email_top').attr('value') == ''){
         	$('#email_top').val('E-mail');
         }
     
     });
     $('#password_top').focusin(function(){
     
         if ($('#password_top').attr('value') == 'Senha'){
         	$('#password_top').val('');
         	marker = $('<span />').insertBefore('#password_top');         	
			$('#password_top').detach().attr('type', 'password').insertAfter(marker);
			marker.remove();

         }
     
     });
     $('#password_top').focusout(function(){
     
         if ($('#password_top').attr('value') == ''){
         	$('#password_top').val('Senha');
         	marker = $('<span />').insertBefore('#password_top');         	
			$('#password_top').detach().attr('type', 'text').insertAfter(marker);
			marker.remove();
         }
     
     });
})

