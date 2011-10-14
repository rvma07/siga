<?php

/**
 * This is the model class for table "matricula".
 *
 * The followings are the available columns in table 'matricula':
 * @property string $cod_matricula
 * @property integer $cod_aluno
 * @property integer $cod_periodo
 * @property integer $cod_unidade
 * @property string $Aluno_cod_aluno
 */
class Matricula extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Matricula the static model class
	 */
        public $pesquisar;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matricula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_aluno, Aluno_cod_aluno', 'required'),
			array('cod_aluno, cod_periodo, cod_unidade', 'numerical', 'integerOnly'=>true),
			array('Aluno_cod_aluno', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_matricula, cod_aluno, cod_periodo, cod_unidade, Aluno_cod_aluno', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'alunoCodAluno' => array(self::BELONGS_TO, 'Aluno', 'Aluno_cod_aluno'),
			'salas' => array(self::MANY_MANY, 'Sala', 'matricula_has_sala(Matricula_cod_matricula, Sala_cod_sala)'),
			'movimentacaos' => array(self::HAS_MANY, 'Movimentacao', 'Matricula_cod_matricula'),
			'notas' => array(self::HAS_MANY, 'Nota', 'Matricula_cod_matricula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_matricula' => 'Cod Matricula',
			'cod_aluno' => 'Cod Aluno',
			'cod_periodo' => 'Cod Periodo',
			'cod_unidade' => 'Cod Unidade',
			'Aluno_cod_aluno' => 'Aluno Cod Aluno',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */


	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
                if($this->pesquisar == ''){
                        		$criteria->compare('cod_matricula',$this->cod_matricula,true);

		$criteria->compare('cod_aluno',$this->cod_aluno);

		$criteria->compare('cod_periodo',$this->cod_periodo);

		$criteria->compare('cod_unidade',$this->cod_unidade);

		$criteria->compare('Aluno_cod_aluno',$this->Aluno_cod_aluno,true);

                }else{
            
                       		$criteria->compare('cod_matricula',$this->pesquisar,true,'OR');

		$criteria->compare('cod_aluno',$this->pesquisar,true,'OR');

		$criteria->compare('cod_periodo',$this->pesquisar,true,'OR');

		$criteria->compare('cod_unidade',$this->pesquisar,true,'OR');

		$criteria->compare('Aluno_cod_aluno',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}