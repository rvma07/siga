<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'etnia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_etnia'); ?>
		<?php echo $form->textField($model,'desc_etnia',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'desc_etnia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->