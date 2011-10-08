<?php
$this->breadcrumbs=array(
	'Periodos'=>array('index'),
	$model->cod_periodo=>array('view','id'=>$model->cod_periodo),
	'Update',
);
?>

<h1>Atualizar Periodo <?php echo $model->cod_periodo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>