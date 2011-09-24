<?php
$this->breadcrumbs=array(
	'Notas'=>array('index'),
	'Criar novo Notas',
);
?>

<h1>Cadastrar Nota</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>