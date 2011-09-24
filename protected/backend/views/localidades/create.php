<?php
$this->breadcrumbs=array(
	'Localidades'=>array('index'),
	'Criar novo Localidades',
);
?>

<h1>Cadastrar Localidades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>