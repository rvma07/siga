<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alergias-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_alergias'); ?>
		<?php echo $form->textField($model,'desc_alergias',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'desc_alergias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->