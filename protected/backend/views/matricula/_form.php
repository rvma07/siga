<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matricula-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_aluno'); ?>
		<?php echo $form->textField($model,'cod_aluno'); ?>
		<?php echo $form->error($model,'cod_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_periodo'); ?>
		<?php echo $form->textField($model,'cod_periodo'); ?>
		<?php echo $form->error($model,'cod_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_unidade'); ?>
		<?php echo $form->textField($model,'cod_unidade'); ?>
		<?php echo $form->error($model,'cod_unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Aluno_cod_aluno'); ?>
		<?php echo $form->textField($model,'Aluno_cod_aluno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Aluno_cod_aluno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->