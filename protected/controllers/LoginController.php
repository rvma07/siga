<?php

class LoginController extends Controller{
	/**
	 * Declares class-based actions.
         *
         */
	public function actions(){
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

	public function actionLogin(){		
		$model=new LoginForm;
		$session = Yii::app()->session;
		if(isset($_REQUEST['ajax']) && $_REQUEST['ajax']==='login-form'){
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		if(isset($_REQUEST)){
	        if(!Yii::app()->user->getIsGuest()){
	        	if (isset($session['back_to'])){
	        		$place = $session['back_to'];
	        		unset($session['back_to']);
					$this->redirect($place);
				}else{
					$this->redirect('/');
				}
	        }	            
			$model->attributes=$_REQUEST;
		    if($model->validate() && $model->login()){
	        	if (isset($session['back_to'])){
	        		$place = $session['back_to'];
	        		unset($session['back_to']);
					$this->redirect($place);
				}else{
					$this->redirect('/');
				}

		    }
		}else{
	        if(!Yii::app()->user->getIsGuest()){
	        	if (isset($session['back_to'])){
	        		$place = $session['back_to'];
	        		unset($session['back_to']);
					$this->redirect($place);
				}else{
					$this->redirect('/');
				}
	        }
		}
	}

	
	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect('/');
	}

	public function actionIndex(){

		$this->render('index');

	}

	public function actionEsqueci(){

		$this->render('esqueci');

	}

    public function actionCadastro(){

		$model=new Usuarios;
		if(isset($_POST['Usuarios'])){
			$model->attributes=$_POST['Usuarios'];
			$model->data_cadastro = date('Y-m-d H:i:s');
			$model->ultima_visita = date('Y-m-d H:i:s');
			$model->status = 0;
			if($model->save())
				$this->redirect(array('/login/login/','username'=>$model->email,'password'=>$_POST['Usuarios']['password']));
		}

		$this->render('cadastro',array(
			'model'=>$model,
		));

	}

	public function actionPedidos(){

		$this->render('pedidos');

	}

	public function actionErro(){

	    if($error=Yii::app()->errorHandler->error) {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('erro', $error);
	    }
	}
}