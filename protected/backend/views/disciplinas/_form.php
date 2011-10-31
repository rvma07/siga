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
		<?php echo $form->labelEx($model,'Serie_cod_serie'); ?>
		<?php echo $form->textField($model,'Serie_cod_serie',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Serie_cod_serie'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->