<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->cod_aluno,
);
?>

<h2>Visualizar Aluno</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_aluno',
		'ra_aluno',
		'nome_aluno',
		'sexo_aluno',
		'local_nasc_aluno',
		'data_nasc',
		'nome_mae',
		'nome_pai',
		'email_resp',
		'email_aluno',
		'cep',
		'num_end',
		'caminho',
		'CEP_idCEP',
		'Etnia_cod_etnia',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />
<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Aluno/update','id'=>$model->cod_aluno), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Aluno/delete','id'=>$model->cod_aluno),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Aluno/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

