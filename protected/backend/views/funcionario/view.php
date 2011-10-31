<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->cod_funcionario,
);
?>

<h2>Visualizar Funcionario</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_funcionario',
		'matricula_funcionario',
		'nome',
		'email',
		'password',
		'ultima_visita',
		'status',
		'tema',
		'caminho',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />
<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Funcionario/update','id'=>$model->cod_funcionario), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Funcionario/delete','id'=>$model->cod_funcionario),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Funcionario/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

