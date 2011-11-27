<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_saude'); ?>
		<?php echo $form->textField($model,'cod_saude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_medicamento'); ?>
		<?php echo $form->textArea($model,'desc_medicamento',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_cirurgia'); ?>
		<?php echo $form->textArea($model,'desc_cirurgia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicacao'); ?>
		<?php echo $form->textArea($model,'medicacao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_convenio'); ?>
		<?php echo $form->textField($model,'desc_convenio',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vacinas'); ?>
		<?php echo $form->textField($model,'vacinas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alergias_cod_alergias'); ?>
		<?php echo $form->textField($model,'alergias_cod_alergias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->