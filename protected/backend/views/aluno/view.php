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
		//'sexo_aluno',
                array(
                    'name' => 'Sexo',
                    'value' => $model->sexoAluno0->desc_sexo
                ),
		'local_nasc_aluno',
		'data_nasc',
		'nome_mae',
		'nome_pai',
		'email_resp',
		'email_aluno',
		//'caminho',
                array(
                    'name' => 'Foto',
                    'type'=>'image',
                    'value'=>'/fotos/'.$model->caminho
                ),
		//'Etnia_cod_etnia',
                array(
                    'name' => 'Etnia',
                    'value' => $model->etniaCodEtnia->desc_etnia
                ),
		'password',
		'cep',
		'end_aluno',
		'num_end',
		'bairro_aluno',
		'comp_aluno',
		'cidade_aluno',
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

