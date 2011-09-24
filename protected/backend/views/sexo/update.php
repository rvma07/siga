<?php
$this->breadcrumbs=array(
	'Sexos'=>array('index'),
	$model->cod_sexo=>array('view','id'=>$model->cod_sexo),
	'Update',
);
?>

<h1>Atualizar Sexo <?php echo $model->cod_sexo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>