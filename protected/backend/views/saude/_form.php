<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'saude-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_medicamento'); ?>
		<?php echo $form->textArea($model,'desc_medicamento',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc_medicamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_cirurgia'); ?>
		<?php echo $form->textArea($model,'desc_cirurgia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc_cirurgia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicacao'); ?>
		<?php echo $form->textArea($model,'medicacao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'medicacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_convenio'); ?>
		<?php echo $form->textField($model,'desc_convenio',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'desc_convenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vacinas'); ?>
		<?php echo $form->textField($model,'vacinas'); ?>
		<?php echo $form->error($model,'vacinas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alergias_cod_alergias'); ?>
		<?php echo $form->textField($model,'alergias_cod_alergias'); ?>
		<?php echo $form->error($model,'alergias_cod_alergias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->