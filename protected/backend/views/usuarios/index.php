<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Usuarioses</h1>

<br />
<a href="/sisadm/Usuarios/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Usuarios</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'id',
		'nome',
		'email',
		'password',
		'data_cadastro',
		'ultima_visita',
		/*
		'tema',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
