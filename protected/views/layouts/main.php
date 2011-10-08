<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="pt" />
	<link rel="stylesheet" type="text/css" href="/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="/css/reset.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/css/form.css" />
    <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        $cs=Yii::app()->clientScript;
        $cs->registerScriptFile(Yii::app()->baseUrl . '/assets/jquery.meio.mask.js', CClientScript::POS_HEAD);
        $cs->registerScriptFile(Yii::app()->baseUrl . '/assets/function.js', CClientScript::POS_HEAD);
     ?>
	<title>SiGA</title>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>
