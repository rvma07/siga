<?php
$this->breadcrumbs=array(
	'Disciplinases'=>array('index'),
	$model->cod_disciplina=>array('view','id'=>$model->cod_disciplina),
	'Update',
);
?>

<h1>Atualizar Disciplinas <?php echo $model->cod_disciplina; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>