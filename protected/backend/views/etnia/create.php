<?php
$this->breadcrumbs=array(
	'Etnias'=>array('index'),
	'Criar novo Etnias',
);
?>

<h1>Cadastrar etnia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>