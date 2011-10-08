<?php
$this->breadcrumbs=array(
	'Nesses'=>array('index'),
	'Criar novo Nesses',
);
?>

<h1>Cadastrar Ness</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>