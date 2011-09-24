<?php
$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	$model->cod_unidade=>array('view','id'=>$model->cod_unidade),
	'Update',
);
?>

<h1>Atualizar Unidade <?php echo $model->cod_unidade; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>