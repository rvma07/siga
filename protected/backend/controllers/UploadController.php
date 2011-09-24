<?php

class UploadController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;
        public $idfoto;
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
                    array('allow',  // deny all users
                               'actions'=>array('ajaxfoto'),
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'uploadedfiles', 'delete'),
				'users'=>array('@'),
			),
                   
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 */
	
	/**
	 * Lists all models.
         *
         *
	 */
        public function actionAjaxFoto(){

//            $Criteria = new CDbCriteria();
//            $Criteria->condition = "idloja = :idloja";
//            $Criteria->params = array (':idloja' =>  $_GET['idloja']);
//            $Criteria->order = "id DESC";
             echo $_SESSION['arquivo'];
        }

        public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();
			if($_GET['model']=='Clientes'){
			   $this->redirect('/sisadm/Clientes/view?id='.$_GET['idrg']);
                        }else{
                             $this->redirect('/sisadm/Produtos/view?id='.$_GET['idrg']);
                        }
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}


        public function actionUploadedFiles()
        {
                // flash does NOT pass the session
                // thus we pass the id with a $_POST variable
                
                Yii::app()->session->sessionID = $_POST['PHPSESSID'];
                Yii::app()->session->init();

                if (!empty($_FILES)) {
                    $tempFile = $_FILES['Filedata']['tmp_name'];
                    if($_POST['arq']==1){
                        $targetPath = '/arquivo_restrito/';
                        $file = time().$_FILES['Filedata']['name'];
                        $targetFile = $_SERVER['DOCUMENT_ROOT'] . $targetPath .$file ;
                        $novonome = substr(md5(uniqid(time())), 0, 15);
                        $file = $_SERVER['DOCUMENT_ROOT'] . $targetPath . $novonome;
                   }else{
                        $targetPath = '/fotos/';
                        $targetPathThumbs = '/fotos/thumbs/';
                        $file = time().$_FILES['Filedata']['name'];
                        $targetFile = $_SERVER['DOCUMENT_ROOT'] . $targetPath .$file ;
                        $novonome = substr(md5(uniqid(time())), 0, 15);
                        $file = $_SERVER['DOCUMENT_ROOT'] . $targetPath . $novonome;
                        $targetFile_230x170  = $_SERVER['DOCUMENT_ROOT'] . $targetPathThumbs .$novonome.'_230x170.jpg';
                        $targetFile_0x75  = $_SERVER['DOCUMENT_ROOT'] . $targetPathThumbs .$novonome.'_0x75.jpg' ;
                        $targetFile_0x600  = $_SERVER['DOCUMENT_ROOT'] . $targetPathThumbs .$novonome.'_0x600.jpg' ;
                        $targetFile_180x240  = $_SERVER['DOCUMENT_ROOT'] . $targetPathThumbs .$novonome.'_180x240.jpg' ;
                    }

                    move_uploaded_file($tempFile,$targetFile);

                    switch ($_POST['model']){
                        case 'Clientes':
                             if($_POST['capa']==0){
                                $image = new SimpleImage();
                                $image->load($targetFile);
                                $image->resizeToWidth(230);
                                $image->save($targetFile_230x170);
                                
                                $model = Clientes::model()->findByPk($_POST['id']);
                                $model->logo = $novonome.'.jpg';
                                $model->save();
                                MyFileHelper::renameFile($targetFile, $file.'.jpg');
                            }else{
                                $image = new SimpleImage();
                                $image->load($targetFile);

                                $image->resizeToHeight(600);
                                $image->save($targetFile_0x600);

                                $image->resizeToHeight(75);
                                $image->save($targetFile_0x75);

                                MyFileHelper::deleteFile($targetFile, $file.'.jpg');

                                $model = new Fotos;
                                $model->caminho = $novonome.'.jpg';
                                $model->idclientes = $_POST['id'];
                                $model->save();

                            }
                            break;
                            case 'Jogos':
                             if($_POST['capa']==0){
                                $image = new SimpleImage();
                                $image->load($targetFile);
                                $image->resizeToWidth(230);
                                $image->save($targetFile_230x170);

                                $model = Jogos::model()->findByPk($_POST['id']);
                                $model->imagem = $novonome.'.jpg';
                                $model->save();
                                MyFileHelper::renameFile($targetFile, $file.'.jpg');
                            }
                            break;


                         case 'Destaque':
                             MyFileHelper::renameFile($targetFile, $file.'.jpg');
                             $model = Destaque::model()->findByPk($_POST['id']);
                             $model->imagem = $novonome.'.jpg';
                             $model->save();
                             break;

                         case 'Produtos':
                              if($_POST['capa']==0){
                                $image = new SimpleImage();
                                $image->load($targetFile);
                                $image->resizeToWidth(180);
                                $image->save($targetFile_180x240);

                                $model = Produtos::model()->findByPk($_POST['id']);
                                $model->arquivo = $novonome.'.jpg';
                                $model->save();
                                MyFileHelper::renameFile($targetFile, $file.'.jpg');
                              }else{
                                $model = new Fotos;
                                $model->caminho = $novonome.'.pdf';
                                $model->idprodutos = $_POST['id'];
                                $model->save();
                                MyFileHelper::renameFile($targetFile, $file.'.pdf');
                              }
                              break;
                    }
             
                    
                    @session_start();
                    $_SESSION['arquivo'] = $novonome.'_0x600.jpg';
                    echo "1";
                 }
                    
        }

	public function actionIndex()
	{
            if(isset($_GET['model']) && isset($_GET['id'])){
                $model= $_GET['model'];
                $model = new $model;
                if($_GET['model']=='Produto'){
                     $model = $model->with('categoria')->findByPk($_GET['id']);
                }else{
                     $model = $model->findByPk($_GET['id']);
                }

               
		$this->render('index',array('model'=>$model));

            }else{
                throw new CHttpException(400,'Requisiçao invalida por favor não repita esta operação.');
            }
	}

	/**
	 * Manages all models.
	 */

	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Fotos::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='foto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
