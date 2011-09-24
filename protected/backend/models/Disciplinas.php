<?php

/**
 * This is the model class for table "disciplinas".
 *
 * The followings are the available columns in table 'disciplinas':
 * @property string $cod_disciplina
 * @property string $desc_disciplina
 * @property string $id_serie
 */
class Disciplinas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Disciplinas the static model class
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
		return 'disciplinas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_disciplina', 'required'),
			array('desc_disciplina', 'length', 'max'=>25),
			array('id_serie', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_disciplina, desc_disciplina, id_serie', 'safe', 'on'=>'search'),
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
			'idSerie0' => array(self::BELONGS_TO, 'Serie', 'id_serie'),
			'notas' => array(self::HAS_MANY, 'Nota', 'Disciplinas_cod_disciplina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_disciplina' => 'Cod Disciplina',
			'desc_disciplina' => 'Desc Disciplina',
			'id_serie' => 'Id Serie',
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
                        		$criteria->compare('cod_disciplina',$this->cod_disciplina,true);

		$criteria->compare('desc_disciplina',$this->desc_disciplina,true);

		$criteria->compare('id_serie',$this->id_serie,true);

                }else{
            
                       		$criteria->compare('cod_disciplina',$this->pesquisar,true,'OR');

		$criteria->compare('desc_disciplina',$this->pesquisar,true,'OR');

		$criteria->compare('id_serie',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}