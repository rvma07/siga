<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_matricula'); ?>
		<?php echo $form->textField($model,'cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_aluno'); ?>
		<?php echo $form->textField($model,'cod_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_periodo'); ?>
		<?php echo $form->textField($model,'cod_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_unidade'); ?>
		<?php echo $form->textField($model,'cod_unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Aluno_cod_aluno'); ?>
		<?php echo $form->textField($model,'Aluno_cod_aluno',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->