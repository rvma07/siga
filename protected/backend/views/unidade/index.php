<?php
$this->breadcrumbs=array(
	'Unidades'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Unidades</h1>

<br />
<a href="/sisadm/Unidade/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Cadastrar nova Unidade</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'unidade-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_unidade',
		'tipo_unidade',
		'nome_unidade',
		'num_end_unidade',
		'cep',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
