<?php

/**
 * This is the model class for table "alergias".
 *
 * The followings are the available columns in table 'alergias':
 * @property integer $cod_alergias
 * @property string $desc_alergias
 */
class Alergias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Alergias the static model class
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
		return 'alergias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_alergias', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_alergias, desc_alergias', 'safe', 'on'=>'search'),
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
			'saudes' => array(self::HAS_MANY, 'Saude', 'alergias_cod_alergias'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_alergias' => 'C&oacute;digo',
			'desc_alergias' => 'Descri&ccedil;&atilde;o de Alergias',
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
                        		$criteria->compare('cod_alergias',$this->cod_alergias);

		$criteria->compare('desc_alergias',$this->desc_alergias,true);

                }else{
            
                       		$criteria->compare('cod_alergias',$this->pesquisar,true,'OR');

		$criteria->compare('desc_alergias',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}