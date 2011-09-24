<?php
$this->breadcrumbs=array(
	'Sexos'=>array('index'),
	'Criar novo Sexos',
);
?>

<h1>Cadastrar Sexo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>