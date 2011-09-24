<?php
$this->breadcrumbs=array(
	'Procedencias'=>array('index'),
	$model->cod_procedencia=>array('view','id'=>$model->cod_procedencia),
	'Update',
);
?>

<h1>Atualizar Procedencia <?php echo $model->cod_procedencia; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>