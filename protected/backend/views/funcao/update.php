<?php
$this->breadcrumbs=array(
	'Funcaos'=>array('index'),
	$model->cod_funcao=>array('view','id'=>$model->cod_funcao),
	'Update',
);
?>

<h1>Atualizar Funcao <?php echo $model->cod_funcao; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>