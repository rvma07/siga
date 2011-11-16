<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Funcion&aacute;rios Cadastrados</h1>

<br />
<a href="/sisadm/Funcionario/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Cadastrar Funcion&aacute;rio</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'funcionario-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_funcionario',
		'matricula_funcionario',
		'nome',
		'email',
		'ultima_visita',
		'status',
		/*
		'status',
		'tema',
		'password',
		'caminho',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
