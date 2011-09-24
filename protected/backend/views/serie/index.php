<?php
$this->breadcrumbs=array(
	'Series'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Series</h1>

<br />
<a href="/sisadm/serie/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo serie</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'serie-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_serie',
		'desc_serie',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
