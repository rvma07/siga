<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_unidade'); ?>
		<?php echo $form->textField($model,'cod_unidade',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_unidade'); ?>
		<?php echo $form->textField($model,'tipo_unidade',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_unidade'); ?>
		<?php echo $form->textField($model,'nome_unidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_end_unidade'); ?>
		<?php echo $form->textField($model,'num_end_unidade',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cep'); ?>
		<?php echo $form->textField($model,'cep',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->