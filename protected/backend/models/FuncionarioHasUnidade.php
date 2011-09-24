<?php

/**
 * This is the model class for table "funcionario_has_unidade".
 *
 * The followings are the available columns in table 'funcionario_has_unidade':
 * @property string $Funcionario_cod_funcionario
 * @property string $Unidade_cod_unidade
 * @property string $Funcao_cod_funcao
 */
class FuncionarioHasUnidade extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return FuncionarioHasUnidade the static model class
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
		return 'funcionario_has_unidade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Funcionario_cod_funcionario, Unidade_cod_unidade, Funcao_cod_funcao', 'required'),
			array('Funcionario_cod_funcionario, Unidade_cod_unidade, Funcao_cod_funcao', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Funcionario_cod_funcionario, Unidade_cod_unidade, Funcao_cod_funcao', 'safe', 'on'=>'search'),
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
			'Funcionario_cod_funcionario' => 'Funcionario Cod Funcionario',
			'Unidade_cod_unidade' => 'Unidade Cod Unidade',
			'Funcao_cod_funcao' => 'Funcao Cod Funcao',
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
                        		$criteria->compare('Funcionario_cod_funcionario',$this->Funcionario_cod_funcionario,true);

		$criteria->compare('Unidade_cod_unidade',$this->Unidade_cod_unidade,true);

		$criteria->compare('Funcao_cod_funcao',$this->Funcao_cod_funcao,true);

                }else{
            
                       		$criteria->compare('Funcionario_cod_funcionario',$this->pesquisar,true,'OR');

		$criteria->compare('Unidade_cod_unidade',$this->pesquisar,true,'OR');

		$criteria->compare('Funcao_cod_funcao',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}