<?php
$this->breadcrumbs=array(
	'Ceps'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Ceps</h1>

<br />
<a href="/sisadm/Cep/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Cep</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'cep-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'idCEP',
		'localidade',
		'tipo_logradouro',
		'logradouro',
		'bairro',
		'Aluno_cod_aluno',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
