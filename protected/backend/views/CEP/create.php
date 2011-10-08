<?php
$this->breadcrumbs=array(
	'Ceps'=>array('index'),
	'Criar novo Ceps',
);
?>

<h1>Cadastrar Cep</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>