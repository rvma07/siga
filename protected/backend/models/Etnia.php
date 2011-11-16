<?php

/**
 * This is the model class for table "etnia".
 *
 * The followings are the available columns in table 'etnia':
 * @property integer $cod_etnia
 * @property string $desc_etnia
 */
class Etnia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Etnia the static model class
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
		return 'etnia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_etnia', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_etnia, desc_etnia', 'safe', 'on'=>'search'),
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
			'alunos' => array(self::HAS_MANY, 'Aluno', 'Etnia_cod_etnia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_etnia' => 'C&oacutedigo',
			'desc_etnia' => 'Descricao',
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
                        		$criteria->compare('cod_etnia',$this->cod_etnia);

		$criteria->compare('desc_etnia',$this->desc_etnia,true);

                }else{
            
                       		$criteria->compare('cod_etnia',$this->pesquisar,true,'OR');

		$criteria->compare('desc_etnia',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}