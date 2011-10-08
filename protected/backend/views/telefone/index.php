<?php
$this->breadcrumbs=array(
	'Telefones'=>array('index')
);

$this->renderPartial('_pesquisa');

?>

<h1>Lista de Telefones</h1>

<br />
<a href="/sisadm/Telefone/create" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-plusthick"></span>Criar novo Telefone</a><br />
<br/>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('backend.extensions.widgets.grid.CGridViewUI', array(
	'id'=>'telefone-grid',
	'dataProvider'=>$model->search(),
        'template' => '{summary}{items}{pager}',
        'summaryText'=>Yii::t('backend', 'Existe {start} - {end} de {count}'),
	'columns'=>array(
		'cod_telefone',
		'tipo_fone',
		'num_fone',
		'contato_fone',
		'sms_fone',
		'Aluno_cod_aluno',
		/*
		'Funcionario_cod_funcionario',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
