<?php

/**
 * This is the model class for table "secoes_has_categoria".
 *
 * The followings are the available columns in table 'secoes_has_categoria':
 * @property string $secoes_id
 * @property string $categoria_id
 */
class SecoesHasCategoria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return SecoesHasCategoria the static model class
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
		return 'secoes_has_categoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('secoes_id, categoria_id', 'required'),
			array('secoes_id, categoria_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('secoes_id, categoria_id', 'safe', 'on'=>'search'),
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
			'secoes_id' => 'Secoes',
			'categoria_id' => 'Categoria',
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
                        		$criteria->compare('secoes_id',$this->secoes_id,true);

		$criteria->compare('categoria_id',$this->categoria_id,true);

                }else{
            
                       		$criteria->compare('secoes_id',$this->pesquisar,true,'OR');

		$criteria->compare('categoria_id',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}