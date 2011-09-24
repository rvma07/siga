<?php
$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Criar novo Categorias',
);
?>

<h1>Cadastrar Categoria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>