<?php
$this->breadcrumbs=array(
	'Telefones'=>array('index'),
	$model->cod_telefone=>array('view','id'=>$model->cod_telefone),
	'Update',
);
?>

<h1>Atualizar Telefone <?php echo $model->cod_telefone; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>