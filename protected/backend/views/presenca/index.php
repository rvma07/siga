<?php
$this->breadcrumbs=array(
	'Presencas'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Presencas</h1>

<br />
<a href="/sisadm/Presenca/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Presenca</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
        'sala'=>$sala
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'presenca-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_presenca',
		'dia',
		'valor',
		'Matricula_has_Sala_Matricula_cod_matricula',
                array(
                    'name' => 'Sala',
                    'value' => '$data->matriculaHasSalaSalaCodSala->salas->desc_sala'
                    ),
		//'Matricula_has_Sala_Sala_cod_sala',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
