<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property string $cod_funcionario
 * @property string $matricula_funcionario
 * @property string $nome
 */
class Funcionario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Funcionario the static model class
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
		return 'funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_funcionario', 'required'),
			array('cod_funcionario, matricula_funcionario', 'length', 'max'=>10),
			array('nome', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_funcionario, matricula_funcionario, nome', 'safe', 'on'=>'search'),
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
			'unidades' => array(self::MANY_MANY, 'Unidade', 'funcionario_has_unidade(Funcionario_cod_funcionario, Unidade_cod_unidade)'),
			'sexos' => array(self::HAS_MANY, 'Sexo', 'Funcionario_cod_funcionario'),
			'telefones' => array(self::HAS_MANY, 'Telefone', 'Funcionario_cod_funcionario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_funcionario' => 'Cod Funcionario',
			'matricula_funcionario' => 'Matricula Funcionario',
			'nome' => 'Nome',
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
                        		$criteria->compare('cod_funcionario',$this->cod_funcionario,true);

		$criteria->compare('matricula_funcionario',$this->matricula_funcionario,true);

		$criteria->compare('nome',$this->nome,true);

                }else{
            
                       		$criteria->compare('cod_funcionario',$this->pesquisar,true,'OR');

		$criteria->compare('matricula_funcionario',$this->pesquisar,true,'OR');

		$criteria->compare('nome',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}