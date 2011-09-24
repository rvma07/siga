<?php
echo "<?php\n"; ?>
Yii::app()->clientScript->registerScript('search', "
$('.search-button1').click(function(){
        $('#pesquisar').val('')
	$('.search-form').toggle();
	return false;
});
$('#buscaavancada').click(function(){

    	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
             url: $('#formbuscaavancada').attr('action'),
             cache: false,
	     data: $('#formbuscaavancada').serialize(),
	});
	return false;
});

$('#busca').click(function(){
   
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
              url: $('#formbuscaavancada').attr('action'),
              cache: false,
              data: $('#formbusca').serialize(),
	});
	return false;
});
");

?>
<div class="form form-pesquisa">

    <?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl(\$this->route),
	'method'=>'get',
        'id'=>'formbusca',
     )); ?>\n"; ?>

    <?php echo "<?php echo CHtml::textField('pesquisar','',array('size'=>30)); ?>\n"; ?>
    <?php echo "<?php echo CHtml::submitButton('Pesquisar',array('name'=>'pesquisa','id'=>'busca')); ?>\n"; ?>
    <?php echo "<?php echo '<br />'.CHtml::link('Busca Avançada','#',array('class'=>'search-button1')); ?>\n"; ?>
     

    <?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div>
