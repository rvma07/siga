<?php
$this->breadcrumbs=array(
	'Movimentacaos'=>array('index'),
	'Criar novo Movimentacaos',
);
?>

<h1>Cadastrar Movimentacao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>