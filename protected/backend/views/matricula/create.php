<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	'Criar novo Matriculas',
);
?>

<h1>Cadastrar Matricula</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'salas' => $salas,'alunos' => $alunos,'procedencia' => $procedencia)); ?>