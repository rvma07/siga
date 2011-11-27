<?php
$this->breadcrumbs=array(
	'Nees'=>array('index'),
	'Criar novo Nees',
);
?>

<h1>Cadastrar Nees</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>