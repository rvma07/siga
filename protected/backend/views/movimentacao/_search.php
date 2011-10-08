<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_movimentacao'); ?>
		<?php echo $form->textField($model,'cod_movimentacao',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dta_entrada'); ?>
		<?php echo $form->textField($model,'dta_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dta_saida'); ?>
		<?php echo $form->textField($model,'dta_saida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Matricula_cod_matricula'); ?>
		<?php echo $form->textField($model,'Matricula_cod_matricula',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->