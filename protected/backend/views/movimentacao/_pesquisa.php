<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button1').click(function(){
        $('#pesquisar').val('')
	$('.search-form').toggle();
	return false;
});
$('#buscaavancada').click(function(){

    	$.fn.yiiGridView.update('movimentacao-grid', {
             url: $('#formbuscaavancada').attr('action'),
             cache: false,
	     data: $('#formbuscaavancada').serialize(),
	});
	return false;
});

$('#busca').click(function(){
   
	$.fn.yiiGridView.update('movimentacao-grid', {
              url: $('#formbuscaavancada').attr('action'),
              cache: false,
              data: $('#formbusca').serialize(),
	});
	return false;
});
");

?>
<div class="form form-pesquisa">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbusca',
     )); ?>

    <?php echo CHtml::textField('pesquisar','',array('size'=>30)); ?>
    <?php echo CHtml::submitButton('Pesquisar',array('name'=>'pesquisa','id'=>'busca')); ?>
    <?php echo '<br />'.CHtml::link('Busca Avançada','#',array('class'=>'search-button1')); ?>
     

    <?php $this->endWidget(); ?>

</div>
