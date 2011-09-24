<?php
$this->breadcrumbs=array(
	'Presencas'=>array('index'),
	$model->cod_presenca=>array('view','id'=>$model->cod_presenca),
	'Update',
);
?>

<h1>Atualizar Presenca <?php echo $model->cod_presenca; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>