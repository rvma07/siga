<?php
$this->breadcrumbs=array(
	'Dias Letivoses'=>array('index'),
	$model->iddias_letivos,
);
?>

<h2>Visualizar DiasLetivos</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'iddias_letivos',
		'quantidade',
		'data',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('DiasLetivos/update','id'=>$model->iddias_letivos), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/DiasLetivos/delete','id'=>$model->iddias_letivos),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/DiasLetivos/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

