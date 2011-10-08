<?php
$this->breadcrumbs=array(
	'Periodos'=>array('index'),
	'Criar novo Periodos',
);
?>

<h1>Cadastrar Periodo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>