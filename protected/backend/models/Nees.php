<?php

/**
 * This is the model class for table "nees".
 *
 * The followings are the available columns in table 'nees':
 * @property string $cod_nees
 * @property string $desc_nees
 */
class Nees extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Nees the static model class
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
		return 'nees';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_nees', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_nees, desc_nees', 'safe', 'on'=>'search'),
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
			'alunos' => array(self::MANY_MANY, 'Aluno', 'nees_has_aluno(NEES_cod_nees, Aluno_cod_aluno)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_nees' => 'C&oacute;digo',
			'desc_nees' => 'Descri&ccedil;&atilde;o',
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
                        		$criteria->compare('cod_nees',$this->cod_nees,true);

		$criteria->compare('desc_nees',$this->desc_nees,true);

                }else{
            
                       		$criteria->compare('cod_nees',$this->pesquisar,true,'OR');

		$criteria->compare('desc_nees',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}