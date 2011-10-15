<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCEP'); ?>
		<?php echo $form->textField($model,'idCEP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localidade'); ?>
		<?php echo $form->textField($model,'localidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_logradouro'); ?>
		<?php echo $form->textField($model,'tipo_logradouro',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logradouro'); ?>
		<?php echo $form->textField($model,'logradouro',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->