<?php

class HomeController extends Controller
{
	/**
	 * Declares class-based actions.
         *
         */
      
         public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

        public function accessRules()
	{
		return array(
                   
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'delete'),
				'users'=>array('@'),
			),

                        array('deny',  // deny all users
				'users'=>array('?'),
			),
			
			
		);
	}

       

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),

		);
                
                
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
        
        
	public function actionIndex(){
            $criteria = new CDbCriteria();
            $criteria->order = "id DESC";
            $suporte = new SuporteForm;
            if(isset($_POST['SuporteForm'])) {
                $suporte->attributes =$_POST['SuporteForm'];
                if($suporte->validate()){
                     $headers = 'MIME-Version: 1.0' . "\r\n";
                     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                     $headers .="From: suporte@setequatro.com.br \r\nReply-To: rvma07@gmail.com";
                     $body  = "<b>Cliente:</b><br />" . chr(10);
                     $body .= Yii::app()->name.'<br />' . chr(10);
                     $body .= "<b>Usu&aacute;rio:</b><br />" . chr(10);
                     $body .= Yii::app()->user->Nome.'<br />' . chr(10);
                     $body .= "<b>Mensagem:</b><br />" . chr(10);
                     $body .= $suporte->mensagem . chr(10);
                     $body .= "<br /><br /><br />Mensagem enviada no dia: ".date("d/m/Y")." as ".date("H:m");
                     mail(Yii::app()->params['adminSuporte'],  utf8_decode($suporte->assunto),$body,$headers);
                     Yii::app()->user->setFlash('suporte','Obrigada por nos contatar. Nós responderemos o mais breve possível.');
                     $this->refresh();
                }
            }
            $this->render('index',array('suporte'=>$suporte));
       
	}

        
	public function actionErro()
	{
	    if($error=Yii::app()->errorHandler->error) {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('erro', $error);
	    }
	}

  



}