<?php
$this->breadcrumbs=array(
	'Movimentacaos'=>array('index'),
	$model->cod_movimentacao=>array('view','id'=>$model->cod_movimentacao),
	'Update',
);
?>

<h1>Atualizar Movimentacao <?php echo $model->cod_movimentacao; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>