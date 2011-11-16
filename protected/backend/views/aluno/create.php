<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Criar novo Alunos',
);
?>

<h1>Cadastro de Alunos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'sexos'=>$sexos,'etnia'=>$etnia)); ?>