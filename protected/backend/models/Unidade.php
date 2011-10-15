<?php

/**
 * This is the model class for table "unidade".
 *
 * The followings are the available columns in table 'unidade':
 * @property string $cod_unidade
 * @property string $tipo_unidade
 * @property string $nome_unidade
 * @property string $num_end_unidade
 * @property string $cep
 */
class Unidade extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Unidade the static model class
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
		return 'unidade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_unidade, num_end_unidade', 'length', 'max'=>10),
			array('nome_unidade', 'length', 'max'=>45),
			array('cep', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_unidade, tipo_unidade, nome_unidade, num_end_unidade, cep', 'safe', 'on'=>'search'),
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
			'funcionarios' => array(self::MANY_MANY, 'Funcionario', 'funcionario_has_unidade(Funcionario_cod_funcionario, Unidade_cod_unidade)'),
			'salas' => array(self::HAS_MANY, 'Sala', 'Unidade_cod_unidade'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_unidade' => 'Código Unidade',
			'tipo_unidade' => 'Tipo da Unidade',
			'nome_unidade' => 'Nome da Unidade',
			'num_end_unidade' => 'N&uacutemero da Unidade',
			'cep' => 'CEP',
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
                        		$criteria->compare('cod_unidade',$this->cod_unidade,true);

		$criteria->compare('tipo_unidade',$this->tipo_unidade,true);

		$criteria->compare('nome_unidade',$this->nome_unidade,true);

		$criteria->compare('num_end_unidade',$this->num_end_unidade,true);

		$criteria->compare('cep',$this->cep,true);

                }else{
            
                       		$criteria->compare('cod_unidade',$this->pesquisar,true,'OR');

		$criteria->compare('tipo_unidade',$this->pesquisar,true,'OR');

		$criteria->compare('nome_unidade',$this->pesquisar,true,'OR');

		$criteria->compare('num_end_unidade',$this->pesquisar,true,'OR');

		$criteria->compare('cep',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}