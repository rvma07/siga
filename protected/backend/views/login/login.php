<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h2 class="ui-widget-header">Login</h2>
       <?php if(Yii::app()->user->hasFlash('mensagem')){ ?>
            <div class="flash-error" style="margin: 0 10px 0 10px;">
                <?php echo Yii::app()->user->getFlash('mensagem'); ?>
            </div>
        <?php } ?>

<div class="form" id="login">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>true,
)); ?>



    <div class="row">
		<?php echo $form->labelEx($model,'Usu&aacute;rio'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'text ui-widget-content ui-corner-all','size'=>'30')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Senha'); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'text ui-widget-content ui-corner-all', 'size'=>'30')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

   	<div class="row submit">
		<?php echo CHtml::submitButton('Entrar');  ?>
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->
