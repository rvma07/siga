<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_periodo'); ?>
		<?php echo $form->textField($model,'cod_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_periodo'); ?>
		<?php echo $form->textField($model,'desc_periodo',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('cod_periodo'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->