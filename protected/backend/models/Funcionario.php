<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property string $cod_funcionario
 * @property string $matricula_funcionario
 * @property string $nome
 * @property string $email
 * @property string $password
 * @property string $ultima_visita
 * @property string $status
 * @property string $tema
 * @property string $caminho
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
			array('matricula_funcionario', 'length', 'max'=>10),
			array('nome', 'length', 'max'=>60),
			array('email', 'length', 'max'=>85),
			array('password', 'length', 'max'=>32),
			array('status', 'length', 'max'=>1),
			array('tema', 'length', 'max'=>45),
			array('caminho', 'length', 'max'=>80),
			array('ultima_visita', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_funcionario, matricula_funcionario, nome, email, password, ultima_visita, status, tema, caminho', 'safe', 'on'=>'search'),
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
			'logs' => array(self::HAS_MANY, 'Log', 'Funcionario_cod_funcionario'),
			'sexos' => array(self::MANY_MANY, 'Sexo', 'sexo_has_funcionario(Sexo_cod_sexo, Funcionario_cod_funcionario)'),
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
			'email' => 'Email',
			'password' => 'Password',
			'ultima_visita' => 'Ultima Visita',
			'status' => 'Status',
			'tema' => 'Tema',
			'caminho' => 'Caminho',
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

		$criteria->compare('email',$this->email,true);

		$criteria->compare('password',$this->password,true);

		$criteria->compare('ultima_visita',$this->ultima_visita,true);

		$criteria->compare('status',$this->status,true);

		$criteria->compare('tema',$this->tema,true);

		$criteria->compare('caminho',$this->caminho,true);

                }else{
            
                       		$criteria->compare('cod_funcionario',$this->pesquisar,true,'OR');

		$criteria->compare('matricula_funcionario',$this->pesquisar,true,'OR');

		$criteria->compare('nome',$this->pesquisar,true,'OR');

		$criteria->compare('email',$this->pesquisar,true,'OR');

		$criteria->compare('password',$this->pesquisar,true,'OR');

		$criteria->compare('ultima_visita',$this->pesquisar,true,'OR');

		$criteria->compare('status',$this->pesquisar,true,'OR');

		$criteria->compare('tema',$this->pesquisar,true,'OR');

		$criteria->compare('caminho',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}