<?php
$this->breadcrumbs=array(
	'Chamada'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Chamadas</h1>

<br />
<a href="/sisadm/chamada/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Lista de Chamadas</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'etnia-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_etnia',
		'desc_etnia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
