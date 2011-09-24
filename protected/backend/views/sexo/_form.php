<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sexo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_sexo'); ?>
		<?php echo $form->textField($model,'desc_sexo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'desc_sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Aluno_cod_aluno'); ?>
		<?php echo $form->textField($model,'Aluno_cod_aluno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Aluno_cod_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Funcionario_cod_funcionario'); ?>
		<?php echo $form->textField($model,'Funcionario_cod_funcionario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Funcionario_cod_funcionario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->