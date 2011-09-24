<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_funcao'); ?>
		<?php echo $form->textField($model,'desc_funcao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'desc_funcao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->