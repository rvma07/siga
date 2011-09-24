<?php
$this->breadcrumbs=array(
	'Notas'=>array('index'),
	$model->cod_nota=>array('view','id'=>$model->cod_nota),
	'Update',
);
?>

<h1>Atualizar Nota <?php echo $model->cod_nota; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>