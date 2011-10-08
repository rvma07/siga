<?php
$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	$model->cod_unidade,
);
?>

<h2>Visualizar Unidade</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_unidade',
		'tipo_unidade',
		'nome_unidade',
		'num_end_unidade',
		'cep',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Unidade/update','id'=>$model->cod_unidade), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Unidade/delete','cod_unidade'=>$model->cod_unidade),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Unidade/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

