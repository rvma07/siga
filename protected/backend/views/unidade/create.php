<?php
$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	'Criar novo Unidades',
);
?>

<h1>Cadastrar Unidade</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>