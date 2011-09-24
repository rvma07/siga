<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'disciplinas-disciplinas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_disciplina'); ?>
		<?php echo $form->textField($model,'desc_disciplina'); ?>
		<?php echo $form->error($model,'desc_disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_serie'); ?>
		<?php echo $form->textField($model,'id_serie'); ?>
		<?php echo $form->error($model,'id_serie'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->