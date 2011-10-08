<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ness-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_ness'); ?>
		<?php echo $form->textField($model,'desc_ness',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'desc_ness'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->