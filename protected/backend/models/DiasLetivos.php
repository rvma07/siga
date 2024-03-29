<?php

/**
 * This is the model class for table "dias_letivos".
 *
 * The followings are the available columns in table 'dias_letivos':
 * @property string $iddias_letivos
 * @property integer $quantidade
 * @property string $data
 */
class DiasLetivos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return DiasLetivos the static model class
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
		return 'dias_letivos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quantidade, data', 'required'),
			array('quantidade', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iddias_letivos, quantidade, data', 'safe', 'on'=>'search'),
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
			'iddias_letivos' => 'Iddias Letivos',
			'quantidade' => 'Quantidade',
			'data' => 'Data',
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
                        		$criteria->compare('iddias_letivos',$this->iddias_letivos,true);

		$criteria->compare('quantidade',$this->quantidade);

		$criteria->compare('data',$this->data,true);

                }else{
            
                       		$criteria->compare('iddias_letivos',$this->pesquisar,true,'OR');

		$criteria->compare('quantidade',$this->pesquisar,true,'OR');

		$criteria->compare('data',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}