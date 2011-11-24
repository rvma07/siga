<?php

/**
 * This is the model class for table "periodo".
 *
 * The followings are the available columns in table 'periodo':
 * @property integer $cod_periodo
 * @property string $desc_periodo
 */
class Periodo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Periodo the static model class
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
		return 'periodo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_periodo', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_periodo, desc_periodo', 'safe', 'on'=>'search'),
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
			'salas' => array(self::HAS_MANY, 'Sala', 'Periodo_cod_periodo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_periodo' => 'C&oacute;digo',
			'desc_periodo' => 'Descri&ccedil;&atilde;o',
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
                        		$criteria->compare('cod_periodo',$this->cod_periodo);

		$criteria->compare('desc_periodo',$this->desc_periodo,true);

                }else{
            
                       		$criteria->compare('cod_periodo',$this->pesquisar,true,'OR');

		$criteria->compare('desc_periodo',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}