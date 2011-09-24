<?php

/**
 * This is the model class for table "funcao".
 *
 * The followings are the available columns in table 'funcao':
 * @property string $cod_funcao
 * @property string $desc_funcao
 */
class Funcao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Funcao the static model class
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
		return 'funcao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_funcao, desc_funcao', 'required'),
			array('cod_funcao', 'length', 'max'=>10),
			array('desc_funcao', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_funcao, desc_funcao', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_funcao' => 'Cod Funcao',
			'desc_funcao' => 'Desc Funcao',
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
                        		$criteria->compare('cod_funcao',$this->cod_funcao,true);

		$criteria->compare('desc_funcao',$this->desc_funcao,true);

                }else{
            
                       		$criteria->compare('cod_funcao',$this->pesquisar,true,'OR');

		$criteria->compare('desc_funcao',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}