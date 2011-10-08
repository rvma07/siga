<?php
$this->breadcrumbs=array(
	'Dias Letivoses'=>array('index'),
	$model->iddias_letivos=>array('view','id'=>$model->iddias_letivos),
	'Update',
);
?>

<h1>Atualizar DiasLetivos <?php echo $model->iddias_letivos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>