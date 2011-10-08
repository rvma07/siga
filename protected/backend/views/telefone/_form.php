<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'telefone-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_fone'); ?>
		<?php echo $form->textField($model,'tipo_fone',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'tipo_fone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_fone'); ?>
		<?php echo $form->textField($model,'num_fone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'num_fone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contato_fone'); ?>
		<?php echo $form->textField($model,'contato_fone',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contato_fone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sms_fone'); ?>
		<?php echo $form->textField($model,'sms_fone',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sms_fone'); ?>
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