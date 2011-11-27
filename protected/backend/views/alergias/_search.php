<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_alergias'); ?>
		<?php echo $form->textField($model,'cod_alergias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_alergias'); ?>
		<?php echo $form->textField($model,'desc_alergias',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->