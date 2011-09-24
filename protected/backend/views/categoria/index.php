<?php
$this->breadcrumbs=array(
	'Categorias'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Categorias</h1>

<br />
<a href="/sisadm/Categoria/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Categoria</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'categoria-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'id',
		'descricao',
		'id_pai',
		'ativo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
