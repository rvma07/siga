<?php
$this->breadcrumbs=array(
	'Disciplinases'=>array('index'),
	$model->cod_disciplina,
);
?>

<h2>Visualizar Disciplinas</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_disciplina',
		'desc_disciplina',
		'Serie_cod_serie',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />
<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Disciplinas/update','id'=>$model->cod_disciplina), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Disciplinas/delete','id'=>$model->cod_disciplina),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Disciplinas/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

