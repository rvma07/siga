<?php

/**
 * This is the model class for table "sexo_has_funcionario".
 *
 * The followings are the available columns in table 'sexo_has_funcionario':
 * @property string $Sexo_cod_sexo
 * @property string $Funcionario_cod_funcionario
 */
class SexoHasFuncionario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return SexoHasFuncionario the static model class
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
		return 'sexo_has_funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Sexo_cod_sexo, Funcionario_cod_funcionario', 'required'),
			array('Sexo_cod_sexo, Funcionario_cod_funcionario', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Sexo_cod_sexo, Funcionario_cod_funcionario', 'safe', 'on'=>'search'),
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
			'Sexo_cod_sexo' => 'Sexo Cod Sexo',
			'Funcionario_cod_funcionario' => 'Funcionario Cod Funcionario',
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
                        		$criteria->compare('Sexo_cod_sexo',$this->Sexo_cod_sexo,true);

		$criteria->compare('Funcionario_cod_funcionario',$this->Funcionario_cod_funcionario,true);

                }else{
            
                       		$criteria->compare('Sexo_cod_sexo',$this->pesquisar,true,'OR');

		$criteria->compare('Funcionario_cod_funcionario',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}