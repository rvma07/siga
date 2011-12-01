<?php
$this->breadcrumbs=array(
	'Saudes'=>array('index'),
	$model->cod_saude,
);
?>

<h2>Visualizar Sa&uacute;de</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_saude',
		'desc_medicamento',
		'desc_cirurgia',
		'medicacao',
		'desc_convenio',
		'vacinas',
		'alergias_cod_alergias',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />
<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Saude/update','id'=>$model->cod_saude), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Saude/delete','id'=>$model->cod_saude),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Saude/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

