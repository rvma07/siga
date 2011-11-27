<?php
$this->breadcrumbs=array(
	'Saudes'=>array('index'),
	$model->cod_saude=>array('view','id'=>$model->cod_saude),
	'Update',
);
?>

<h1>Atualizar Saude <?php echo $model->cod_saude; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>