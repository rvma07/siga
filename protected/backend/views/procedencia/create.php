<?php
$this->breadcrumbs=array(
	'Procedencias'=>array('index'),
	'Cadastrar Procedencias',
);
?>

<h1>Cadastrar Procedencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>