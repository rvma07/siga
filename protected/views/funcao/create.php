<?php
$this->breadcrumbs=array(
	'Funcaos'=>array('index'),
	'Criar novo Funcaos',
);
?>

<h1>Cadastrar Funcao</h1>

<?php echo $this->renderPartial('application.backend.views.funcao._form', array('model'=>$model)); ?>
