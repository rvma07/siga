<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'localidades-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pais'); ?>
		<?php echo $form->textField($model,'Pais',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UF'); ?>
		<?php echo $form->textField($model,'UF',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'UF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cidade'); ?>
		<?php echo $form->textField($model,'Cidade',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CEP_idCEP'); ?>
		<?php echo $form->textField($model,'CEP_idCEP'); ?>
		<?php echo $form->error($model,'CEP_idCEP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->