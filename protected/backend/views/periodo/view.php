<?php
$this->breadcrumbs=array(
	'Periodos'=>array('index'),
	$model->cod_periodo,
);
?>

<h2>Visualizar Periodo</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_periodo',
		'desc_periodo',
	),
)); ?>

<h2 class="ui-widget-header">Descrição</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Periodo/update','cod_periodo'=>$model->cod_periodo), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Periodo/delete','id'=>$model->cod_periodo),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Periodo/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

