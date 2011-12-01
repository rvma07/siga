<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Alunos</h1>

<br />
<a href="/sisadm/Aluno/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Cadastrar Aluno</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'aluno-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_aluno',
		'ra_aluno',
		'nome_aluno',
		//'sexo_aluno',
                array(
                    'name' => 'Sexo',
                    'value' =>'$data->sexoAluno0->desc_sexo'
                ),
		'local_nasc_aluno',
		'data_nasc',
		'nome_mae',
		/*
		'nome_pai',
		'email_resp',
		'email_aluno',
		'caminho',
		'Etnia_cod_etnia',
		'password',
		'cep',
		'end_aluno',
		'num_end',
		'bairro_aluno',
		'comp_aluno',
		'cidade_aluno',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
