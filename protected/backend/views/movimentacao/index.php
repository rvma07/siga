<?php
$this->breadcrumbs=array(
	'Movimentacaos'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Movimentacaos</h1>

<br />
<a href="/sisadm/Movimentacao/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Movimentacao</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'movimentacao-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_movimentacao',
		'dta_entrada',
		'dta_saida',
		'Matricula_cod_matricula',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
