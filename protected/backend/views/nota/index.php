<?php
$this->breadcrumbs=array(
	'Notas'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Notas</h1>

<br />
<a href="/sisadm/Nota/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Nota</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'nota-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_nota',
		'nota',
		'data_refencia',
		'Matricula_cod_matricula',
		'Disciplinas_cod_disciplina',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
