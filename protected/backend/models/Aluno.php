<?php

/**
 * This is the model class for table "aluno".
 *
 * The followings are the available columns in table 'aluno':
 * @property string $cod_aluno
 * @property string $ra_aluno
 * @property string $nome_aluno
 * @property integer $sexo_aluno
 * @property integer $local_nasc_aluno
 * @property string $data_nasc
 * @property string $nome_mae
 * @property string $nome_pai
 * @property string $email_resp
 * @property string $email_aluno
 * @property integer $cep
 * @property integer $num_end
 * @property integer $cod_etnia
 * @property integer $Etnia_cod_etnia
 */
class Aluno extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Aluno the static model class
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
		return 'aluno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_aluno, sexo_aluno, nome_mae, Etnia_cod_etnia', 'required'),
			array('sexo_aluno, local_nasc_aluno, cep, num_end, cod_etnia, Etnia_cod_etnia', 'numerical', 'integerOnly'=>true),
			array('ra_aluno', 'length', 'max'=>14),
			array('nome_aluno, nome_mae, nome_pai', 'length', 'max'=>60),
			array('email_resp, email_aluno', 'length', 'max'=>100),
			array('data_nasc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_aluno, ra_aluno, nome_aluno, sexo_aluno, local_nasc_aluno, data_nasc, nome_mae, nome_pai, email_resp, email_aluno, cep, num_end, cod_etnia, Etnia_cod_etnia', 'safe', 'on'=>'search'),
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
			'etniaCodEtnia' => array(self::BELONGS_TO, 'Etnia', 'Etnia_cod_etnia'),
			'ceps' => array(self::HAS_MANY, 'Cep', 'Aluno_cod_aluno'),
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'Aluno_cod_aluno'),
			'nees' => array(self::MANY_MANY, 'Nees', 'nees_has_aluno(NEES_cod_nees, Aluno_cod_aluno)'),
			'procedencias' => array(self::HAS_MANY, 'Procedencia', 'Aluno_cod_aluno'),
			'saudes' => array(self::MANY_MANY, 'Saude', 'saude_has_aluno(saude_cod_saude, Aluno_cod_aluno)'),
			'sexos' => array(self::MANY_MANY, 'Sexo', 'sexo_has_aluno(Sexo_cod_sexo, Aluno_cod_aluno)'),
			'telefones' => array(self::HAS_MANY, 'Telefone', 'Aluno_cod_aluno'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_aluno' => 'Cod Aluno',
			'ra_aluno' => 'Ra Aluno',
			'nome_aluno' => 'Nome Aluno',
			'sexo_aluno' => 'Sexo Aluno',
			'local_nasc_aluno' => 'Local Nasc Aluno',
			'data_nasc' => 'Data Nasc',
			'nome_mae' => 'Nome Mae',
			'nome_pai' => 'Nome Pai',
			'email_resp' => 'Email Resp',
			'email_aluno' => 'Email Aluno',
			'cep' => 'Cep',
			'num_end' => 'Num End',
			'cod_etnia' => 'Cod Etnia',
			'Etnia_cod_etnia' => 'Etnia Cod Etnia',
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
                        		$criteria->compare('cod_aluno',$this->cod_aluno,true);

		$criteria->compare('ra_aluno',$this->ra_aluno,true);

		$criteria->compare('nome_aluno',$this->nome_aluno,true);

		$criteria->compare('sexo_aluno',$this->sexo_aluno);

		$criteria->compare('local_nasc_aluno',$this->local_nasc_aluno);

		$criteria->compare('data_nasc',$this->data_nasc,true);

		$criteria->compare('nome_mae',$this->nome_mae,true);

		$criteria->compare('nome_pai',$this->nome_pai,true);

		$criteria->compare('email_resp',$this->email_resp,true);

		$criteria->compare('email_aluno',$this->email_aluno,true);

		$criteria->compare('cep',$this->cep);

		$criteria->compare('num_end',$this->num_end);

		$criteria->compare('cod_etnia',$this->cod_etnia);

		$criteria->compare('Etnia_cod_etnia',$this->Etnia_cod_etnia);

                }else{
            
                       		$criteria->compare('cod_aluno',$this->pesquisar,true,'OR');

		$criteria->compare('ra_aluno',$this->pesquisar,true,'OR');

		$criteria->compare('nome_aluno',$this->pesquisar,true,'OR');

		$criteria->compare('sexo_aluno',$this->pesquisar,true,'OR');

		$criteria->compare('local_nasc_aluno',$this->pesquisar,true,'OR');

		$criteria->compare('data_nasc',$this->pesquisar,true,'OR');

		$criteria->compare('nome_mae',$this->pesquisar,true,'OR');

		$criteria->compare('nome_pai',$this->pesquisar,true,'OR');

		$criteria->compare('email_resp',$this->pesquisar,true,'OR');

		$criteria->compare('email_aluno',$this->pesquisar,true,'OR');

		$criteria->compare('cep',$this->pesquisar,true,'OR');

		$criteria->compare('num_end',$this->pesquisar,true,'OR');

		$criteria->compare('cod_etnia',$this->pesquisar,true,'OR');

		$criteria->compare('Etnia_cod_etnia',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}