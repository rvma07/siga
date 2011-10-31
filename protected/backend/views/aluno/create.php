<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Cadastro de Alunos',
);
?>

<h1>Cadastrar Aluno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'sexos'=>$sexos, 'etnia'=>$etnia)); ?>