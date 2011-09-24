<?php

/**
 * This is the model class for table "matricula_has_sala".
 *
 * The followings are the available columns in table 'matricula_has_sala':
 * @property string $Matricula_cod_matricula
 * @property string $Sala_cod_sala
 * @property integer $ativa
 */
class MatriculaHasSala extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MatriculaHasSala the static model class
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
		return 'matricula_has_sala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Matricula_cod_matricula, Sala_cod_sala', 'required'),
			array('ativa', 'numerical', 'integerOnly'=>true),
			array('Matricula_cod_matricula, Sala_cod_sala', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Matricula_cod_matricula, Sala_cod_sala, ativa', 'safe', 'on'=>'search'),
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
			'presencas' => array(self::HAS_MANY, 'Presenca', 'Matricula_has_Sala_Sala_cod_sala'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Matricula_cod_matricula' => 'Matricula Cod Matricula',
			'Sala_cod_sala' => 'Sala Cod Sala',
			'ativa' => 'Ativa',
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
                        		$criteria->compare('Matricula_cod_matricula',$this->Matricula_cod_matricula,true);

		$criteria->compare('Sala_cod_sala',$this->Sala_cod_sala,true);

		$criteria->compare('ativa',$this->ativa);

                }else{
            
                       		$criteria->compare('Matricula_cod_matricula',$this->pesquisar,true,'OR');

		$criteria->compare('Sala_cod_sala',$this->pesquisar,true,'OR');

		$criteria->compare('ativa',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}