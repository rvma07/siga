<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->cod_sala=>array('view','id'=>$model->cod_sala),
	'Update',
);
?>

<h1>Atualizar Sala <?php echo $model->cod_sala; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>