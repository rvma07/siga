<?php

/**
 * This is the model class for table "cep".
 *
 * The followings are the available columns in table 'cep':
 * @property integer $idCEP
 * @property integer $localidade
 * @property string $tipo_logradouro
 * @property string $logradouro
 * @property string $bairro
 * @property string $Aluno_cod_aluno
 */
class Cep extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Cep the static model class
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
		return 'cep';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('localidade, Aluno_cod_aluno', 'required'),
			array('localidade', 'numerical', 'integerOnly'=>true),
			array('tipo_logradouro', 'length', 'max'=>5),
			array('logradouro', 'length', 'max'=>80),
			array('bairro', 'length', 'max'=>50),
			array('Aluno_cod_aluno', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idCEP, localidade, tipo_logradouro, logradouro, bairro, Aluno_cod_aluno', 'safe', 'on'=>'search'),
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
			'localidades' => array(self::HAS_MANY, 'Localidades', 'CEP_idCEP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCEP' => 'Id Cep',
			'localidade' => 'Localidade',
			'tipo_logradouro' => 'Tipo Logradouro',
			'logradouro' => 'Logradouro',
			'bairro' => 'Bairro',
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
                        		$criteria->compare('idCEP',$this->idCEP);

		$criteria->compare('localidade',$this->localidade);

		$criteria->compare('tipo_logradouro',$this->tipo_logradouro,true);

		$criteria->compare('logradouro',$this->logradouro,true);

		$criteria->compare('bairro',$this->bairro,true);

		$criteria->compare('Aluno_cod_aluno',$this->Aluno_cod_aluno,true);

                }else{
            
                       		$criteria->compare('idCEP',$this->pesquisar,true,'OR');

		$criteria->compare('localidade',$this->pesquisar,true,'OR');

		$criteria->compare('tipo_logradouro',$this->pesquisar,true,'OR');

		$criteria->compare('logradouro',$this->pesquisar,true,'OR');

		$criteria->compare('bairro',$this->pesquisar,true,'OR');

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