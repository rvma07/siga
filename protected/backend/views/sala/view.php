<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->cod_sala,
);
?>

<h2>Visualizar Sala</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_sala',
		'desc_sala',
		//'Unidade_cod_unidade',
                array(
                      'name' => 'Unidade',
                      'value' => $model->unidadeCodUnidade->nome_unidade
                ),
		//'Periodo_cod_periodo',
               array(
                      'name' => 'Per&iacute;odo',
                      'value' => $model->periodoCodPeriodo->desc_periodo
                ),
		//'Serie_cod_serie',
                array(
                        'name' => 'Ano',
                        'value' =>$model->serieCodSerie->desc_serie
                ),
		'Serie_cod_serie',
	),
)); ?>

<h2 class="ui-widget-header">Descri&ccedil;&atilde;o</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('Sala/update','cod_sala'=>$model->cod_sala), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/Sala/delete','cod_sala'=>$model->cod_sala),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/Sala/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

