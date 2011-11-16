<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Cadastro de Funcionários',
);
?>

<h1>Cadastro de Funcion&aacuterio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'sexos'=>$sexos)); ?>