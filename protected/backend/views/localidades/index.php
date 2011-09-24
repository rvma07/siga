<?php
$this->breadcrumbs=array(
	'Localidades'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Localidades</h1>

<br />
<a href="/sisadm/Localidades/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Localidades</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'localidades-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'Cod_localidade',
		'Pais',
		'UF',
		'Cidade',
		'CEP_idCEP',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
