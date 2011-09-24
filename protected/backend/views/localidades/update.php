<?php
$this->breadcrumbs=array(
	'Localidades'=>array('index'),
	$model->Cod_localidade=>array('view','id'=>$model->Cod_localidade),
	'Update',
);
?>

<h1>Atualizar Localidades <?php echo $model->Cod_localidade; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>