<?php
$this->breadcrumbs=array(
	'Funcaos'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Funcaos</h1>

<br />
<a href="/sisadm/Funcao/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Funcao</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'funcao-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_funcao',
		'desc_funcao',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
