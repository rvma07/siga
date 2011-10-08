<?php
$this->breadcrumbs=array(
	'Telefones'=>array('index'),
	'Criar novo Telefones',
);
?>

<h1>Cadastrar Telefone</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>