<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cod_localidade'); ?>
		<?php echo $form->textField($model,'Cod_localidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pais'); ?>
		<?php echo $form->textField($model,'Pais',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UF'); ?>
		<?php echo $form->textField($model,'UF',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cidade'); ?>
		<?php echo $form->textField($model,'Cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CEP_idCEP'); ?>
		<?php echo $form->textField($model,'CEP_idCEP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->