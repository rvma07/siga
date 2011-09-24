<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_procedencia'); ?>
		<?php echo $form->textField($model,'cod_procedencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NomeEscolaProced'); ?>
		<?php echo $form->textField($model,'NomeEscolaProced',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SerieProced'); ?>
		<?php echo $form->textField($model,'SerieProced',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CidadeProced'); ?>
		<?php echo $form->textField($model,'CidadeProced',array('size'=>45,'maxlength'=>45)); ?>
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