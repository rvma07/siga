<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'periodo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> São Requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_periodo'); ?>
		<?php echo $form->textField($model,'desc_periodo',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'desc_periodo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->