<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	$model->cod_matricula=>array('view','id'=>$model->cod_matricula),
	'Update',
);
?>

<h1>Atualizar Matricula <?php echo $model->cod_matricula; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>