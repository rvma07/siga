<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'procedencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Escola de Procedencia'); ?>
		<?php echo $form->textField($model,'NomeEscolaProced',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NomeEscolaProced'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S&eacute;rie / Ano de Procedencia'); ?>
		<?php echo $form->textField($model,'SerieProced',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SerieProced'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cidade de Procedencia'); ?>
		<?php echo $form->textField($model,'CidadeProced',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CidadeProced'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'GRAVAR' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->