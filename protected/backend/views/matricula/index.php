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
		'cod_periodo',
		'cod_unidade',
		'Aluno_cod_aluno',
		'Procedencia_cod_procedencia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
