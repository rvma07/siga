<?php
$this->breadcrumbs=array(
	'Saudes'=>array('index'),
	'Criar novo Saudes',
);
?>

<h1>Cadastrar Saude</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>