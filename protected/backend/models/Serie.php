<?php

/**
 * This is the model class for table "serie".
 *
 * The followings are the available columns in table 'serie':
 * @property string $cod_serie
 * @property string $desc_serie
 */
class Serie extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Serie the static model class
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
		return 'serie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_serie, desc_serie', 'required'),
			array('cod_serie', 'length', 'max'=>10),
			array('desc_serie', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_serie, desc_serie', 'safe', 'on'=>'search'),
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
			'disciplinases' => array(self::HAS_MANY, 'Disciplinas', 'Serie_cod_serie'),
			'salas' => array(self::HAS_MANY, 'Sala', 'Serie_cod_serie'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_serie' => 'Cod Serie',
			'desc_serie' => 'Desc Serie',
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
                        		$criteria->compare('cod_serie',$this->cod_serie,true);

		$criteria->compare('desc_serie',$this->desc_serie,true);

                }else{
            
                       		$criteria->compare('cod_serie',$this->pesquisar,true,'OR');

		$criteria->compare('desc_serie',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}