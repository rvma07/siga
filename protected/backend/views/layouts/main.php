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
	<link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_backend/<?php echo Yii::app()->user->Tema; ?>/jquery.ui.all.css" rel="stylesheet" />
    <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        $cs=Yii::app()->clientScript;
        $cs->registerScriptFile(Yii::app()->baseUrl . '/assets/jquery-ui-1.8.5.custom.min.js', CClientScript::POS_HEAD);
        $cs->registerScriptFile(Yii::app()->baseUrl . '/assets/jquery.meio.mask.js', CClientScript::POS_HEAD);
        $cs->registerScriptFile(Yii::app()->baseUrl . '/assets/functionBackend.js', CClientScript::POS_HEAD);                
     ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
 <!-- colocar scrpits do acordion -->
	<link rel="stylesheet" href="/css/accordion/demo.css" type="text/css" charset="utf-8"" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="/css/accordion/jquery.accordion.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(".accordion").accordion();

    </script>


	<script type="text/javascript">
	jQuery().ready(function(){

		// simple accordion
		jQuery('#list1a').accordion();
		jQuery('#list1b').accordion({
			autoheight: false
		});
		
		// second simple accordion with special markup
		jQuery('#navigation').accordion({
			active: false,
			header: '.head',
			navigation: true,

			event: 'mouseover',
			fillSpace: true,
			animated: 'easeslide'
		});
		
		// highly customized accordion
		jQuery('#list2').accordion({
			event: 'mouseover',
			active: '.selected',
			selectedClass: 'active',
			animated: "bounceslide",
			header: "dt"
		}).bind("change.ui-accordion", function(event, ui) {

			jQuery('<div>' + ui.oldHeader.text() + ' hidden, ' + ui.newHeader.text() + ' shown</div>').appendTo('#log');
		});
		
		// first simple accordion with special markup
		jQuery('#list3').accordion({
			header: 'div.title',
			active: false,
			alwaysOpen: false,
			animated: false,
			autoheight: false
		});

		

		var wizard = $("#wizard").accordion({

			header: '.title',

			event: false

		});

		
		var wizardButtons = $([]);

		$("div.title", wizard).each(function(index) {

			wizardButtons = wizardButtons.add($(this)
			.next()
			.children(":button")
			.filter(".next, .previous")
			.click(function() {

				wizard.accordion("activate", index + ($(this).is(".next") ? 1 : -1))

			}));

		});

		
		// bind to change event of select to control first and seconds accordion
		// similar to tab's plugin triggerTab(), without an extra method

		var accordions = jQuery('#list1a, #list1b, #list2, #list3, #navigation, #wizard');

		
		jQuery('#switch select').change(function() {
			accordions.accordion("activate", this.selectedIndex-1 );
		});
		jQuery('#close').click(function() {
			accordions.accordion("activate", -1);
		});
		jQuery('#switch2').change(function() {
			accordions.accordion("activate", this.value);
		});

		jQuery('#enable').click(function() {

			accordions.accordion("enable");

		});

		jQuery('#disable').click(function() {

			accordions.accordion("disable");

		});

		jQuery('#remove').click(function() {

			accordions.accordion("destroy");
			wizardButtons.unbind("click");

		});

	});
	</script> 


 
 <!-- // fim do acordion -->
</head>
<body>
<div id="geral" class="ui-widget-content">
    <div id="cabecalho">
        <div id="barralogo" class="ui-state-default">
            <div id="logo">
                <img src="/images/logo3.jpg" alt="iconesisadm"/>
                <h1><center>SiGA</h1>
                <h2>Sistema Gerenciador Academico</center></h2>
            </div>
            <div id="identificacao">
                <?php
                $hora_do_dia=date("H");
                if (($hora_do_dia >=06) && ($hora_do_dia <=12)) echo "<strong>Bom Dia</strong> ";
                if (($hora_do_dia >12) && ($hora_do_dia <=18)) echo "<strong>Boa Tarde</strong> ";
                if (($hora_do_dia >18) && ($hora_do_dia <=24)) echo "<strong>Boa Noite</strong> ";
                if (($hora_do_dia >00) && ($hora_do_dia <=06)) echo "<strong>Boa Madrugada</strong> ";
                ?>
                <?php echo Yii::app()->user->nome; ?> !<br />
			
				Último acesso: !<br />
				Hojé é: <?php echo date("d/m/y");?> , <?php echo date("H:i");?> 
				
				
            </div>
            
        </div>
        <?php $this->widget('application.backend.extensions.menuMaker.menuMaker',array()); ?>
        <div id="caminho" class="ui-widget-header ui-widget-content">
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                 'links'=>$this->breadcrumbs,
	    )) ?>
        </div>
    </div>
    <div id="conteudo" class="ui-widget-content">
         <?php if(Yii::app()->user->hasFlash('mensagem')){ ?>
            <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('mensagem'); ?>
            </div>
        <?php } ?>
        <?php echo $content; ?>
    </div>
    <div id="rodape" class="ui-widget-header">
        Sistema Desenvolvido por Rafael, Carlos e Jorge - Grupo de TCC da ETEC Antonio Devisate <br />
        Todos direitos são reservados.
    </div>
	    
      
</div><!-- page -->

</body>
</html>
