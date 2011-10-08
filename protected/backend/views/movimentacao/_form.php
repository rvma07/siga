<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'movimentacao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dta_entrada'); ?>
		<?php echo $form->textField($model,'dta_entrada'); ?>
		<?php echo $form->error($model,'dta_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dta_saida'); ?>
		<?php echo $form->textField($model,'dta_saida'); ?>
		<?php echo $form->error($model,'dta_saida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Matricula_cod_matricula'); ?>
		<?php echo $form->textField($model,'Matricula_cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Matricula_cod_matricula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->