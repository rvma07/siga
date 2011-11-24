<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	'Cadastro de Turmas',
);
?>

<h1>Cadastrar Turmas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'Unidade'=>$Unidade,'Periodo'=>$Periodo,'Serie'=>$Serie)); ?>