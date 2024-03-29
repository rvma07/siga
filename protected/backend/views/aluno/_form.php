<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'R A'); ?>
		<?php echo $form->textField($model,'ra_aluno',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'ra_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nome'); ?>
		<?php echo $form->textField($model,'nome_aluno',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nome_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
		<?php echo CHtml::activeDropDownList($model,'sexo_aluno',CHtml::listData($sexos,'cod_sexo','desc_sexo')); ?>
		<?php echo $form->error($model,'sexo_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Naturalidade'); ?>
		<?php echo $form->textField($model,'local_nasc_aluno'); ?>
		<?php echo $form->error($model,'local_nasc_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Data Nascim'); ?>
		<?php echo $form->textField($model,'data_nasc',array('rel' => 'data')); ?>
		<?php echo $form->error($model,'data_nasc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nome da M&atilde;e'); ?>
		<?php echo $form->textField($model,'nome_mae',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nome_mae'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nome do pai'); ?>
		<?php echo $form->textField($model,'nome_pai',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nome_pai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email do Respons&aacute;vel'); ?>
		<?php echo $form->textField($model,'email_resp',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_resp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_aluno'); ?>
		<?php echo $form->textField($model,'email_aluno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caminho'); ?>
                <?php echo CHtml::activeFileField($model, 'caminho'); ?>		
		<?php echo $form->error($model,'caminho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Etnia'); ?>
		<?php echo CHtml::activeDropDownList($model,'Etnia_cod_etnia',CHtml::listData($etnia,'cod_etnia','desc_etnia')); ?>
		<?php echo $form->error($model,'Etnia_cod_etnia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Senha'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CEP'); ?>
		<?php echo $form->textField($model,'cep',array('rel' => 'cep')); ?>
		<?php echo $form->error($model,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Endere&ccedil;o'); ?>
		<?php echo $form->textField($model,'end_aluno',array('size'=>60,'maxlength'=>60,'rel' => 'rua')); ?>
		<?php echo $form->error($model,'end_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'N&uacute;mero'); ?>
		<?php echo $form->textField($model,'num_end',array('rel' => 'numero')); ?>
		<?php echo $form->error($model,'num_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bairro'); ?>
		<?php echo $form->textField($model,'bairro_aluno',array('size'=>45,'maxlength'=>45,'rel' => 'bairro')); ?>
		<?php echo $form->error($model,'bairro_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Complemento'); ?>
		<?php echo $form->textField($model,'comp_aluno',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'comp_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cidade'); ?>
		<?php echo $form->textField($model,'cidade_aluno',array('size'=>45,'maxlength'=>45,'rel' => 'cidade')); ?>
		<?php echo $form->error($model,'cidade_aluno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'GRAVAR' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->