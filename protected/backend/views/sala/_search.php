<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_sala'); ?>
		<?php echo $form->textField($model,'cod_sala',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_sala'); ?>
		<?php echo $form->textField($model,'desc_sala',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Unidade_cod_unidade'); ?>
		<?php echo $form->textField($model,'Unidade_cod_unidade',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Periodo_cod_periodo'); ?>
		<?php echo $form->textField($model,'Periodo_cod_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Serie_cod_serie'); ?>
		<?php echo $form->textField($model,'Serie_cod_serie',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->