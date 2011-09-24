<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Criar novo Alunos',
);
?>

<h1>Cadastrar Aluno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>