<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	'Criar novo Salas',
);
?>

<h1>Cadastrar Sala</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>