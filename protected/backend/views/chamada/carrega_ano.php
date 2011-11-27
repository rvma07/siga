<?php echo CHtml::label('Sala','ano'); ?>
<?php echo CHtml::dropDownList('Ano','',array("0" => "") + CHtml::listData($anos,'cod_sala','desc_sala'),array("class"=>"serie_carregar")); ?>

<script>

	$('.serie_carregar').change(function(){
	
		$('.lista_alunos').load('/sisadm/chamada/listaaluno',{ 'id_sala' : $(this).attr('value')});
	});	
	
</script>