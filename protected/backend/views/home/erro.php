<?php
$this->pageTitle=Yii::app()->name . ' - Erro';
$this->breadcrumbs=array(
	'Erro',
);
?>
<div id="erro">
    <h2>Página Não Encontrada</h2>
    <h2><?php echo nl2br(CHtml::encode($data['message'])); ?></h2>
    <p>
    A URL solicitada não foi encontrada neste servidor.<br />
    Se você digitou a URL manualmente verifique a ortografia e tente novamente.
    </p>
    <p>
    Se você acha que isso é um erro no servidor, por favor contate-nós por este e-mail <span>suporte@siga.com.br</span>.
    </p>
    <div class="version">
    <span>Data: <?php  echo date('d-m-Y H:i:s'); ?></span>


    </div>
</div>