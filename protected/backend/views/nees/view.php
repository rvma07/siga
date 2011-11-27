<?php
$this->breadcrumbs=array(
	'Nees'=>array('index'),
	$model->cod_nees,
);
?>

<h2>Visualizar Nees</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_nees',
		'desc_nees',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Nees/update','id'=>$model->cod_nees), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Nees/delete','id'=>$model->cod_nees),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Nees/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

