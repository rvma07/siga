<?php
$this->breadcrumbs=array(
	'Procedencias'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Procedencias</h1>

<br />
<a href="/sisadm/Procedencia/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Procedencia</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'procedencia-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_procedencia',
		'NomeEscolaProced',
		'SerieProced',
		'CidadeProced',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
