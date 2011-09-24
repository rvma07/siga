<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'disciplinas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_disciplina'); ?>
		<?php echo $form->textField($model,'desc_disciplina',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'desc_disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_serie'); ?>
		<?php echo $form->textField($model,'id_serie',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'id_serie'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->