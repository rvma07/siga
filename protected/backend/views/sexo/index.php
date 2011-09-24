<?php
$this->breadcrumbs=array(
	'Sexos'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Sexos</h1>

<br />
<a href="/sisadm/Sexo/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Sexo</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'sexo-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_sexo',
		'desc_sexo',
		'Aluno_cod_aluno',
		'Funcionario_cod_funcionario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
