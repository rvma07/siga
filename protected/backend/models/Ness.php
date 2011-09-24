<?php

/**
 * This is the model class for table "ness".
 *
 * The followings are the available columns in table 'ness':
 * @property string $cod_ness
 * @property string $desc_ness
 * @property string $Aluno_cod_aluno
 */
class Ness extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Ness the static model class
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
		return 'ness';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_ness, Aluno_cod_aluno', 'required'),
			array('cod_ness, Aluno_cod_aluno', 'length', 'max'=>10),
			array('desc_ness', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_ness, desc_ness, Aluno_cod_aluno', 'safe', 'on'=>'search'),
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
			'alunoCodAluno' => array(self::BELONGS_TO, 'Aluno', 'Aluno_cod_aluno'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_ness' => 'Cod Ness',
			'desc_ness' => 'Desc Ness',
			'Aluno_cod_aluno' => 'Aluno Cod Aluno',
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
                        		$criteria->compare('cod_ness',$this->cod_ness,true);

		$criteria->compare('desc_ness',$this->desc_ness,true);

		$criteria->compare('Aluno_cod_aluno',$this->Aluno_cod_aluno,true);

                }else{
            
                       		$criteria->compare('cod_ness',$this->pesquisar,true,'OR');

		$criteria->compare('desc_ness',$this->pesquisar,true,'OR');

		$criteria->compare('Aluno_cod_aluno',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}