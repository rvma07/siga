<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nota-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nota'); ?>
		<?php echo $form->textField($model,'nota',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_refencia'); ?>
		<?php echo $form->textField($model,'data_refencia'); ?>
		<?php echo $form->error($model,'data_refencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Matricula_cod_matricula'); ?>
		<?php echo $form->textField($model,'Matricula_cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Matricula_cod_matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Disciplinas_cod_disciplina'); ?>
		<?php echo $form->textField($model,'Disciplinas_cod_disciplina',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Disciplinas_cod_disciplina'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->