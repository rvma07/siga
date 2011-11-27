<?php

/**
 * This is the model class for table "nees_has_aluno".
 *
 * The followings are the available columns in table 'nees_has_aluno':
 * @property string $NEES_cod_nees
 * @property string $Aluno_cod_aluno
 */
class NeesHasAluno extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return NeesHasAluno the static model class
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
		return 'nees_has_aluno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NEES_cod_nees, Aluno_cod_aluno', 'required'),
			array('NEES_cod_nees, Aluno_cod_aluno', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NEES_cod_nees, Aluno_cod_aluno', 'safe', 'on'=>'search'),
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
			'NEES_cod_nees' => 'Nees Cod Nees',
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
                        		$criteria->compare('NEES_cod_nees',$this->NEES_cod_nees,true);

		$criteria->compare('Aluno_cod_aluno',$this->Aluno_cod_aluno,true);

                }else{
            
                       		$criteria->compare('NEES_cod_nees',$this->pesquisar,true,'OR');

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