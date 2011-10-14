<?php

/**
 * This is the model class for table "telefone".
 *
 * The followings are the available columns in table 'telefone':
 * @property string $cod_telefone
 * @property string $tipo_fone
 * @property string $num_fone
 * @property string $contato_fone
 * @property string $sms_fone
 * @property string $Aluno_cod_aluno
 * @property string $Funcionario_cod_funcionario
 */
class Telefone extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Telefone the static model class
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
		return 'telefone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_fone, Aluno_cod_aluno, Funcionario_cod_funcionario', 'required'),
			array('tipo_fone', 'length', 'max'=>3),
			array('num_fone', 'length', 'max'=>20),
			array('contato_fone', 'length', 'max'=>30),
			array('sms_fone', 'length', 'max'=>1),
			array('Aluno_cod_aluno, Funcionario_cod_funcionario', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_telefone, tipo_fone, num_fone, contato_fone, sms_fone, Aluno_cod_aluno, Funcionario_cod_funcionario', 'safe', 'on'=>'search'),
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
			'funcionarioCodFuncionario' => array(self::BELONGS_TO, 'Funcionario', 'Funcionario_cod_funcionario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_telefone' => 'Cod Telefone',
			'tipo_fone' => 'Tipo Fone',
			'num_fone' => 'Num Fone',
			'contato_fone' => 'Contato Fone',
			'sms_fone' => 'Sms Fone',
			'Aluno_cod_aluno' => 'Aluno Cod Aluno',
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
                        		$criteria->compare('cod_telefone',$this->cod_telefone,true);

		$criteria->compare('tipo_fone',$this->tipo_fone,true);

		$criteria->compare('num_fone',$this->num_fone,true);

		$criteria->compare('contato_fone',$this->contato_fone,true);

		$criteria->compare('sms_fone',$this->sms_fone,true);

		$criteria->compare('Aluno_cod_aluno',$this->Aluno_cod_aluno,true);

		$criteria->compare('Funcionario_cod_funcionario',$this->Funcionario_cod_funcionario,true);

                }else{
            
                       		$criteria->compare('cod_telefone',$this->pesquisar,true,'OR');

		$criteria->compare('tipo_fone',$this->pesquisar,true,'OR');

		$criteria->compare('num_fone',$this->pesquisar,true,'OR');

		$criteria->compare('contato_fone',$this->pesquisar,true,'OR');

		$criteria->compare('sms_fone',$this->pesquisar,true,'OR');

		$criteria->compare('Aluno_cod_aluno',$this->pesquisar,true,'OR');

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