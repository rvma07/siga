<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>
?>

<h2>Visualizar <?php echo $this->modelClass ?></h2>

<?php echo "<?php"; ?> $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
<?php
 // echo  $model->perfil;
?>
 </div>
<br />
<br />

<?php echo "<?php echo"; ?> CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('<?php echo $this->modelClass; ?>/update','id'=>$model->id), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo "<?php echo"; ?> CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/<?php echo $this->modelClass; ?>/delete','id'=>$model->id),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo "<?php echo"; ?> CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/<?php echo $this->modelClass; ?>/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>

