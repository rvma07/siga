<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->cod_aluno=>array('view','id'=>$model->cod_aluno),
	'Update',
);
?>

<h1>Atualizar Aluno <?php echo $model->cod_aluno; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>