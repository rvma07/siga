<?php
$this->breadcrumbs=array(
	'Salas'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Salas</h1>

<br />
<a href="/sisadm/Sala/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar Sala</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'sala-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_sala',
		//'Serie_cod_serie',
                array(
                        'name' => 'Ano',
                        'value' =>'$data->serieCodSerie->desc_serie[ASC]'
                ),
                'desc_sala',
                //'Periodo_cod_periodo',
                array(
                        'name' => 'Per&iacute;odo',
                        'value' => '$data->periodoCodPeriodo->desc_periodo'
                ),
            	//'Unidade_cod_unidade',
                array(
			'name' => 'Unidade',
			'value' => '$data->unidadeCodUnidade->nome_unidade'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
