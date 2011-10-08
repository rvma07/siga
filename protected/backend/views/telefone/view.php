<?php
$this->breadcrumbs=array(
	'Telefones'=>array('index'),
	$model->cod_telefone,
);
?>

<h2>Visualizar Telefone</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_telefone',
		'tipo_fone',
		'num_fone',
		'contato_fone',
		'sms_fone',
		'Aluno_cod_aluno',
		'Funcionario_cod_funcionario',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Telefone/update','id'=>$model->id), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Telefone/delete','id'=>$model->id),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Telefone/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

