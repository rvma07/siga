<div class="wide form" id="buscaavancada">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'id'=>'formbuscaavancada',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_aluno'); ?>
		<?php echo $form->textField($model,'cod_aluno',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ra_aluno'); ?>
		<?php echo $form->textField($model,'ra_aluno',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_aluno'); ?>
		<?php echo $form->textField($model,'nome_aluno',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo_aluno'); ?>
		<?php echo $form->textField($model,'sexo_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local_nasc_aluno'); ?>
		<?php echo $form->textField($model,'local_nasc_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_nasc'); ?>
		<?php echo $form->textField($model,'data_nasc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_mae'); ?>
		<?php echo $form->textField($model,'nome_mae',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_pai'); ?>
		<?php echo $form->textField($model,'nome_pai',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_resp'); ?>
		<?php echo $form->textField($model,'email_resp',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_aluno'); ?>
		<?php echo $form->textField($model,'email_aluno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cep'); ?>
		<?php echo $form->textField($model,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_end'); ?>
		<?php echo $form->textField($model,'num_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caminho'); ?>
		<?php echo $form->textField($model,'caminho',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CEP_idCEP'); ?>
		<?php echo $form->textField($model,'CEP_idCEP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Etnia_cod_etnia'); ?>
		<?php echo $form->textField($model,'Etnia_cod_etnia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar',array('id'=>'buscaavancada')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->