<?php
$this->breadcrumbs=array(
	'Saudes'=>array('index'),
	'Cadastrar Ficha de Saude',
);
?>

<h1>Cadastro da Ficha de Sa&uacute;de</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>