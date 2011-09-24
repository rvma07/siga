<?php
$this->breadcrumbs=array(
	'Presencas'=>array('index'),
	$model->cod_presenca,
);
?>

<h2>Visualizar Presenca</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_presenca',
		'dia',
		'valor',
		'Matricula_has_Sala_Matricula_cod_matricula',
		'Matricula_has_Sala_Sala_cod_sala',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Presenca/update','id'=>$model->id), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Presenca/delete','id'=>$model->id),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Presenca/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

