<?php
$this->breadcrumbs=array(
	'Nees'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Nees</h1>

<br />
<a href="/sisadm/Nees/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Nees</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'nees-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_nees',
		'desc_nees',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
