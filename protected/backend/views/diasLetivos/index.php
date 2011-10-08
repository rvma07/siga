<?php
$this->breadcrumbs=array(
	'Dias Letivoses'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Dias Letivoses</h1>

<br />
<a href="/sisadm/DiasLetivos/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo DiasLetivos</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'dias-letivos-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'iddias_letivos',
		'quantidade',
		'data',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
