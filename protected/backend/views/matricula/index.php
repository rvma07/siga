<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Matriculas</h1>

<br />
<a href="/sisadm/Matricula/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Matricula</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'matricula-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_matricula',
		//'cod_periodo',
		array(
			'name' => 'Per&iacute;odo',
			'value' => '$data->salas[0]->periodoCodPeriodo->desc_periodo'
		),
		//'cod_unidade',
		array(
			'name' => 'Unidade',
			'value' => '$data->salas[0]->unidadeCodUnidade->nome_unidade'
		),
		//'Aluno_cod_aluno',
		array(
			'name' => 'Aluno',
			'value' => '$data->aluno->nome_aluno'
		),
		array(
			'name' => 'Serie',
			'value' => '$data->salas[0]->serieCodSerie->desc_serie'
		),		
                array(
                    'name' => 'Sala',
                    'value' => '$data->salas[0]->desc_sala'
                ),
		//'Procedencia_cod_procedencia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
