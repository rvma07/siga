<?php
$this->breadcrumbs=array(
	'Nees'=>array('index'),
	$model->cod_nees=>array('view','id'=>$model->cod_nees),
	'Update',
);
?>

<h1>Atualizar Nees <?php echo $model->cod_nees; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>