<?php
$this->breadcrumbs=array(
	'Ceps'=>array('index'),
	$model->idCEP=>array('view','id'=>$model->idCEP),
	'Update',
);
?>

<h1>Atualizar CEP <?php echo $model->idCEP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>