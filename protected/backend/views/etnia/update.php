<?php
$this->breadcrumbs=array(
	'Etnias'=>array('index'),
	$model->cod_etnia=>array('view','id'=>$model->cod_etnia),
	'Update',
);
?>

<h1>Atualizar Etnia <?php echo $model->cod_etnia; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>