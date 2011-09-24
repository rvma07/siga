<?php

class HomeController extends Controller
{
	/**
	 * Declares class-based actions.
         *
         */
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


	public function actionIndex(){
		$this->render('index');
	}

	public function actionTeste(){
		$this->render('teste');
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