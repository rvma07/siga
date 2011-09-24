<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->cod_funcionario=>array('view','id'=>$model->cod_funcionario),
	'Update',
);
?>

<h1>Atualizar funcionario <?php echo $model->cod_funcionario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>