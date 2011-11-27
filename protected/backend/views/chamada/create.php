<?php
$this->breadcrumbs=array(
	'Chamada'=>array('index'),
	'Criar nova Chamada',
);
?>

<h1>Lan&ccedil;ar Chamada</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'Unidade'=>$Unidades)); ?>