<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unidade-Unidade-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cep'); ?>
		<?php echo $form->textField($model,'cep'); ?>
		<?php echo $form->error($model,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_unidade'); ?>
		<?php echo $form->textField($model,'tipo_unidade'); ?>
		<?php echo $form->error($model,'tipo_unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_end_unidade'); ?>
		<?php echo $form->textField($model,'num_end_unidade'); ?>
		<?php echo $form->error($model,'num_end_unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_unidade'); ?>
		<?php echo $form->textField($model,'nome_unidade'); ?>
		<?php echo $form->error($model,'nome_unidade'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->