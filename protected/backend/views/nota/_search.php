<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_nota'); ?>
		<?php echo $form->textField($model,'cod_nota',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nota'); ?>
		<?php echo $form->textField($model,'nota',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_refencia'); ?>
		<?php echo $form->textField($model,'data_refencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Matricula_cod_matricula'); ?>
		<?php echo $form->textField($model,'Matricula_cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Disciplinas_cod_disciplina'); ?>
		<?php echo $form->textField($model,'Disciplinas_cod_disciplina',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->