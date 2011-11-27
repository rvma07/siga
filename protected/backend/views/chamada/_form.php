<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'chamada-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>
	
		<div class="row unidade_chamada">
			<?php echo CHtml::label('Selecione a unidade escolar','unidades'); ?>
			<?php echo CHtml::dropDownList('unidade','',array("0" => "") + CHtml::listData($Unidade,'cod_unidade','nome_unidade')); ?>
		</div>

		<div class="row ano_chamada">
			<?php echo CHtml::label('Sala','ano'); ?>
			<?php echo CHtml::dropDownList('Ano','',array("","")); ?>
		</div>
		
<div STYLE="float : right; width :50%; height:500px;" class="lista_alunos float:left;"> 

 </div>
<?php $this->endWidget(); ?>
