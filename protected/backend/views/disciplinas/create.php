<?php
$this->breadcrumbs=array(
	'Disciplinases'=>array('index'),
	'Criar novo Disciplinases',
);
?>

<h1>Cadastrar Disciplinas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>