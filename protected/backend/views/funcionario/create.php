<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Criar novo Funcionarios',
);
?>

<h1>Cadastrar funcionario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>