<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Criar novo Usuarioses',
);
?>

<h1>Cadastrar Usuarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>