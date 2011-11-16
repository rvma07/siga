<?php

/**
 * This is the model class for table "sexo".
 *
 * The followings are the available columns in table 'sexo':
 * @property string $cod_sexo
 * @property string $desc_sexo
 */
class Sexo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Sexo the static model class
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
		return 'sexo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_sexo', 'required'),
			array('desc_sexo', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_sexo, desc_sexo', 'safe', 'on'=>'search'),
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
			'alunos' => array(self::MANY_MANY, 'Aluno', 'sexo_has_aluno(Sexo_cod_sexo, Aluno_cod_aluno)'),
			'funcionarios' => array(self::MANY_MANY, 'Funcionario', 'sexo_has_funcionario(Sexo_cod_sexo, Funcionario_cod_funcionario)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_sexo' => 'Cod Sexo',
			'desc_sexo' => 'Desc Sexo',
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
                        		$criteria->compare('cod_sexo',$this->cod_sexo,true);

		$criteria->compare('desc_sexo',$this->desc_sexo,true);

                }else{
            
                       		$criteria->compare('cod_sexo',$this->pesquisar,true,'OR');

		$criteria->compare('desc_sexo',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}