<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'saude-saude-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'vacinas'); ?>
		<?php echo $form->textField($model,'vacinas'); ?>
		<?php echo $form->error($model,'vacinas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_convenio'); ?>
		<?php echo $form->textField($model,'desc_convenio'); ?>
		<?php echo $form->error($model,'desc_convenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_medicamento'); ?>
		<?php echo $form->textField($model,'desc_medicamento'); ?>
		<?php echo $form->error($model,'desc_medicamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_cirurgia'); ?>
		<?php echo $form->textField($model,'desc_cirurgia'); ?>
		<?php echo $form->error($model,'desc_cirurgia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicacao'); ?>
		<?php echo $form->textField($model,'medicacao'); ?>
		<?php echo $form->error($model,'medicacao'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->