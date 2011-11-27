<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unidade-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	<form action="checkbox.php" method="post">
          <B>Tipo da Unidade:</B><br>
          <input type=checkbox name="emei" value=emei> EMEI<br>
		  <input type=checkbox name="emef" value=emef> EMEF<br>
		  <input type=checkbox name="emefei" value=emefei> EMEFEI<br>
	</form>

/** 	<div class="row">
		  <?php echo $form->labelEx($model,'tipo_unidade'); ?>
		  <?php echo $form->textField($model,'tipo_unidade',array('size'=>10,'maxlength'=>10)); ?>
		  <?php echo $form->error($model,'tipo_unidade'); ?>
     </div>*/ 
 

	<div class="row">
		<?php echo $form->labelEx($model,'nome_unidade'); ?>
		<?php echo $form->textField($model,'nome_unidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome_unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_end_unidade'); ?>
		<?php echo $form->textField($model,'num_end_unidade',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'num_end_unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cep'); ?>
		<?php echo $form->textField($model,'cep',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cep'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->