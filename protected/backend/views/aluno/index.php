<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Alunos</h1>

<br />
<a href="/sisadm/Aluno/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Aluno</a><br />
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
		'sexo_aluno',
		'local_nasc_aluno',
		'data_nasc',
		/*
		'nome_mae',
		'nome_pai',
		'email_resp',
		'email_aluno',
		'cep',
		'num_end',
		'cod_etnia',
		'Etnia_cod_etnia',
		'caminho',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
