<?php

/**
 * This is the model class for table "presenca".
 *
 * The followings are the available columns in table 'presenca':
 * @property string $cod_presenca
 * @property string $dia
 * @property string $valor
 * @property string $Matricula_has_Sala_Matricula_cod_matricula
 * @property string $Matricula_has_Sala_Sala_cod_sala
 */
class Presenca extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Presenca the static model class
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
		return 'presenca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Matricula_has_Sala_Matricula_cod_matricula, Matricula_has_Sala_Sala_cod_sala', 'required'),
			array('valor', 'length', 'max'=>1),
			array('Matricula_has_Sala_Matricula_cod_matricula, Matricula_has_Sala_Sala_cod_sala', 'length', 'max'=>10),
			array('dia', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_presenca, dia, valor, Matricula_has_Sala_Matricula_cod_matricula, Matricula_has_Sala_Sala_cod_sala', 'safe', 'on'=>'search'),
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
			'matriculaHasSalaMatriculaCodMatricula' => array(self::BELONGS_TO, 'MatriculaHasSala', 'Matricula_has_Sala_Matricula_cod_matricula'),
			'matriculaHasSalaSalaCodSala' => array(self::BELONGS_TO, 'MatriculaHasSala', 'Matricula_has_Sala_Sala_cod_sala'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_presenca' => 'C&oacute;digo',
			'dia' => 'Dia',
			'valor' => 'Valor',
			'Matricula_has_Sala_Matricula_cod_matricula' => 'Matricula Has Sala Matricula Cod Matricula',
			'Matricula_has_Sala_Sala_cod_sala' => 'Matricula Has Sala Sala Cod Sala',
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
                        		$criteria->compare('cod_presenca',$this->cod_presenca,true);

		$criteria->compare('dia',$this->dia,true);

		$criteria->compare('valor',$this->valor,true);

		$criteria->compare('Matricula_has_Sala_Matricula_cod_matricula',$this->Matricula_has_Sala_Matricula_cod_matricula,true);

		$criteria->compare('Matricula_has_Sala_Sala_cod_sala',$this->Matricula_has_Sala_Sala_cod_sala,true);

                }else{
            
                $criteria->compare('cod_presenca',$this->pesquisar,true,'OR');

		$criteria->compare('dia',$this->pesquisar,true,'OR');

		$criteria->compare('valor',$this->pesquisar,true,'OR');

		$criteria->compare('Matricula_has_Sala_Matricula_cod_matricula',$this->pesquisar,true,'OR');

		$criteria->compare('Matricula_has_Sala_Sala_cod_sala',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}