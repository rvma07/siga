<?php
$this->breadcrumbs=array(
	'Nesses'=>array('index'),
	$model->cod_ness=>array('view','id'=>$model->cod_ness),
	'Update',
);
?>

<h1>Atualizar Ness <?php echo $model->cod_ness; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>