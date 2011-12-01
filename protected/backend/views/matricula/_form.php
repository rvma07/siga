<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matricula-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo CHtml::label("Sala", "sala"); ?>
            <?php echo CHtml::dropDownList("sala", "", $salas); ?>
        </div>

        <div class="row">
            <?php echo CHtml::label("Ativo", "ativo"); ?>
            <?php echo CHtml::dropDownList("ativo", "", array("1"=>"Sim","0"=>"Não")); ?>
            
        </div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'Aluno'); ?>
                <?php echo CHtml::activeDropDownList($model,'Aluno_cod_aluno',  CHtml::listData($alunos, "cod_aluno", "nome_aluno")); ?>
		<?php //echo $form->textField($model,'Aluno_cod_aluno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Aluno_cod_aluno'); ?>
	</div>
        


	<div class="row">
		<?php echo $form->labelEx($model,'Procedencia_cod_procedencia'); ?>
                <?php echo CHtml::activeDropDownList($model,'Procedencia_cod_procedencia',  CHtml::listData($procedencia, "cod_procedencia", "NomeEscolaProced")); ?>
		<?php echo $form->error($model,'Procedencia_cod_procedencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'GRAVAR' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->