<?php

class MatriculaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'create','update', 'delete'),
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
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Matricula;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Matricula']))
		{
			$model->attributes=$_POST['Matricula'];
			if($model->save()){
                            $mat_has_sala = new MatriculaHasSala();
                            $mat_has_sala->Matricula_cod_matricula = $model->cod_matricula;
                            $mat_has_sala->Sala_cod_sala = $_POST['sala'];
                            $mat_has_sala->ativa = $_POST['ativo'];
                            $mat_has_sala->save();
                            $this->redirect(array('view','id'=>$model->cod_matricula));
                        }
		}
                $sala = array();
                foreach(Sala::model()->findAll(array("order" => "desc_sala ASC")) as $s){
                    $sala[$s->cod_sala] = $s->desc_sala . ' - ' .$s->serieCodSerie->desc_serie;
                }
		$this->render('create',array(
                    'model'=>$model,
                    'salas' => $sala,
                    'alunos' => Aluno::model()->findAll(),
                    'procedencia' => Procedencia::model()->findAll()
                   
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Matricula']))
		{
			$model->attributes=$_POST['Matricula'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->cod_matricula));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */

	public function actionIndex()
	{
		$model=new Matricula('search');
                $model->pesquisar = $_GET['pesquisar'];
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Matricula']))
			$model->attributes=$_GET['Matricula'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Matricula::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='matricula-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
