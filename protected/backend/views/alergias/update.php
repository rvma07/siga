<?php
$this->breadcrumbs=array(
	'Alergiases'=>array('index'),
	$model->cod_alergias=>array('view','id'=>$model->cod_alergias),
	'Update',
);
?>

<h1>Atualizar Alergias <?php echo $model->cod_alergias; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>