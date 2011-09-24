<?php
$this->breadcrumbs=array(
	'Presencas'=>array('index'),
	'Criar novo Presencas',
);
?>

<h1>Cadastrar Presenca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>