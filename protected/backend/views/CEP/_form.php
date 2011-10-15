<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cep-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'localidade'); ?>
		<?php echo $form->textField($model,'localidade'); ?>
		<?php echo $form->error($model,'localidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_logradouro'); ?>
		<?php echo $form->textField($model,'tipo_logradouro',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'tipo_logradouro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logradouro'); ?>
		<?php echo $form->textField($model,'logradouro',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'logradouro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bairro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->