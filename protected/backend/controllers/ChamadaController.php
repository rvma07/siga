<?php

class ChamadaController extends Controller
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
				'actions'=>array('index','view','carregaano','listaaluno'),
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
	 * Lists all models.
	 */

	public function actionIndex()
	{
		if (isset($_POST['Aluno'])){
			foreach($_POST['Aluno'] as $chave => $valor){
				$chave = explode("_",$chave);
				$chamada = new Presenca();
				$chamada->valor = $chave[2];
				$chamada->Matricula_has_Sala_Matricula_cod_matricula = $chave[0];
				$chamada->Matricula_has_Sala_Sala_cod_sala = $chave[1];
				$chamada->dia = date("Y-m-d",strtotime($_POST['data_inicio']));
				$chamada->save();
				echo "Chave = $chave valor = $valor <br />";
			}
		}
		$this->render('create',
			array('Unidades'=>Unidade::model()->findAll()));
	}
	
	public function actionCarregaano(){
		$this->layout='nada';
		$this->render('carrega_ano',array(
			'anos' => Sala::model()->findAll('Unidade_cod_unidade = '.$_POST['id_unidade'])
		));
	}
	
	public function actionListaaluno(){
		
		$this->layout='nada';
		$this->render('listaaluno',array(
			'alunos' => Matricula::model()->findAll(array('with' => 'salas','condition' => 'salas.cod_sala = '.$_REQUEST['id_sala']))
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
				$this->_model=DiasLetivos::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='dias-letivos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
