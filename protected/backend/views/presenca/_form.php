<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'presenca-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Matricula_has_Sala_Matricula_cod_matricula'); ?>
		<?php echo $form->textField($model,'Matricula_has_Sala_Matricula_cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Matricula_has_Sala_Matricula_cod_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Matricula_has_Sala_Sala_cod_sala'); ?>
		<?php echo $form->textField($model,'Matricula_has_Sala_Sala_cod_sala',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Matricula_has_Sala_Sala_cod_sala'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->