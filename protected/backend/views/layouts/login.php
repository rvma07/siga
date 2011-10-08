<?php
//  $dominio = $_SERVER['HTTP_HOST'];
//  setcookie("tema", "sunny", time() + 31536000, "/", ".$dominio");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt" />
    <meta name="description" content="<?php echo $this->metaDescricao; ?>" />
    <meta name="keywords" content="<?php echo $this->keywords; ?>" />
    <meta name="robots" content="index, follow" />
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/ie6.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_backend/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_backend/reset.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_backend/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_backend/form.css" />
    <link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_backend/<?php echo isset($_COOKIE['tema'])? $_COOKIE['tema'] : 'smoothness'; ?>/jquery.ui.all.css" rel="stylesheet" />
    <?php
    Yii::app()->clientScript->registerCoreScript('jquery');
    $cs=Yii::app()->clientScript;
    $cs->registerScriptFile(Yii::app()->baseUrl . '/assets/jquery-ui-1.8.5.custom.min.js', CClientScript::POS_HEAD);
    $cs->registerScriptFile(Yii::app()->baseUrl . '/assets/functionBackend.js', CClientScript::POS_HEAD);
    ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
      
</head>
<body>
<div id="telalogin" class="ui-widget-content">
    <div id="cabecalho">
        <div id="barralogo" class="ui-state-default">
            <div id="logo">
                <img src="/images/logo1.jpg" alt="iconesisadm"/>
                <h1><center>SiGA</center></h1>
                <h2><center>Sistema Gerenciador Acadêmico</center></h2>
            </div>
            
        </div>     
    </div>
    <div id="formlogin" class="ui-widget-content">
          <?php echo $content; ?>
    </div>
    <div id="rodape" class="ui-widget-header">
        Sistema Desenvolvido pelos alunos do curso de Informática para Internet <br />
        - Turma Betaweb - Todos direitos são reservados .
    </div>
	    
      
</div><!-- page -->

</body>
</html>
