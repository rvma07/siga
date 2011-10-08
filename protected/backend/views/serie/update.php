<?php
$this->breadcrumbs=array(
	'Series'=>array('index'),
	$model->cod_serie=>array('view','id'=>$model->cod_serie),
	'Update',
);
?>

<h1>Atualizar Serie <?php echo $model->cod_serie; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>