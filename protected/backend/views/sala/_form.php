<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sala-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Todos os campos são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Unidade'); ?>
		<?php echo CHtml::activeDropDownList($model,'Unidade_cod_unidade',CHtml::listData($Unidade,'cod_unidade','nome_unidade')); ?>
		<!-- <?php echo $form->textField($model,'Unidade_cod_unidade',array('size'=>10,'maxlength'=>10)); ?> -->
		<?php echo $form->error($model,'Unidade_cod_unidade'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Periodo'); ?>
		<?php echo CHtml::activeDropDownList($model,'Periodo_cod_periodo',CHtml::listData($Periodo,'cod_periodo','desc_periodo')); ?>
		<!--<?php echo $form->textField($model,'Periodo_cod_periodo'); ?>-->
		<?php echo $form->error($model,'Periodo_cod_periodo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Ano'); ?>
		<?php echo CHtml::activeDropDownList($model,'Serie_cod_serie',CHtml::listData($Serie,'cod_serie','desc_serie')); ?>
		<!--<?php echo $form->textField($model,'Serie_cod_serie',array('size'=>10,'maxlength'=>10)); ?>-->
		<?php echo $form->error($model,'Serie_cod_serie'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Turma'); ?>
		<?php echo $form->textField($model,'desc_sala',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'desc_sala'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'CADASTRAR' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->