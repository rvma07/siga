<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sala-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_sala'); ?>
		<?php echo $form->textField($model,'desc_sala',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'desc_sala'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Unidade_cod_unidade'); ?>
		<?php echo $form->textField($model,'Unidade_cod_unidade',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Unidade_cod_unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Periodo_cod_periodo'); ?>
		<?php echo $form->textField($model,'Periodo_cod_periodo'); ?>
		<?php echo $form->error($model,'Periodo_cod_periodo'); ?>
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