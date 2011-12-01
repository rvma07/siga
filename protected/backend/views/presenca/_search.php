<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
	</div>

        <div class="row">
		<?php echo $form->label($model,'Matricula_has_Sala_Sala_cod_sala'); ?>
                <?php echo CHtml::activeDropDownList($model, 'Matricula_has_Sala_Sala_cod_sala', $sala); ?>
		<?php //echo $form->textField($model,'Matricula_has_Sala_Sala_cod_sala',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->