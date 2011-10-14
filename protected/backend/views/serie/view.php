<?php
$this->breadcrumbs=array(
	'Series'=>array('index'),
	$model->cod_serie,
);
?>

<h2>Visualizar Ano</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_serie',
		'desc_serie',
	),
)); ?>

<h2 class="ui-widget-header">Descrição</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('serie/update','id'=>$model->cod_serie), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/serie/delete','id'=>$model->cod_serie),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Serie/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

