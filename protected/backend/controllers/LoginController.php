<?php

class LoginController extends Controller
{
        public $layout='login';
        
	public function actionLogin()
	{
		$model=new LoginForm;
                
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

	
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
		        if($model->validate() && $model->login()){
				//gravar data ultimo acesso
					$command = new CDbCommand (Yii::app()->db,
					'update funcionario set ultima_visita = now() 
					where cod_funcionario =' . Yii::app()->user->id);
					$command->execute();
				//fim grava acesso
				$this->redirect('/sisadm/home');
				}
		}else{
                    if(!Yii::app()->user->isGuest){
                            $this->redirect('/sisadm/home');
                    }
                }
                
		               
		$this->render('login',array('model'=>$model));
	}

	
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
     


}