<?php
$this->breadcrumbs=array(
	'Alergiases'=>array('index'),
	'Criar novo Alergiases',
);
?>

<h1>Cadastrar Alergias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>