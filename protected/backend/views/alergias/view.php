<?php
$this->breadcrumbs=array(
	'Alergiases'=>array('index'),
	$model->cod_alergias,
);
?>

<h2>Visualizar Alergias</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_alergias',
		'desc_alergias',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />
<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Alergias/update','id'=>$model->cod_alergias), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Alergias/delete','id'=>$model->cod_alergias),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Alergias/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

