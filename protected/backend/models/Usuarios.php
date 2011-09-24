<?php

/**
 * This is the model class for table "Usuarios".
 *
 * The followings are the available columns in table 'Usuarios':
 * @property string $id
 * @property string $nome
 * @property string $email
 * @property string $password
 * @property string $data_cadastro
 * @property string $ultima_visita
 * @property string $tema
 * @property integer $status
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuarios the static model class
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
		return 'Usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, email, password, data_cadastro, ultima_visita, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>50),
			array('email, tema', 'length', 'max'=>80),
			array('password', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, email, password, data_cadastro, ultima_visita, tema, status', 'safe', 'on'=>'search'),
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
			'carrinhoCompras' => array(self::HAS_MANY, 'CarrinhoCompra', 'usuarios_id'),
			'compras' => array(self::HAS_MANY, 'Compra', 'usuarios_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'email' => 'Email',
			'password' => 'Senha',
			'data_cadastro' => 'Data Cadastro',
			'ultima_visita' => 'Ultima Visita',
			'tema' => 'Tema',
			'status' => 'Status',
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
                        		$criteria->compare('id',$this->id,true);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('password',$this->password,true);

		$criteria->compare('data_cadastro',$this->data_cadastro,true);

		$criteria->compare('ultima_visita',$this->ultima_visita,true);

		$criteria->compare('tema',$this->tema,true);

		$criteria->compare('status',$this->status);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('nome',$this->pesquisar,true,'OR');

		$criteria->compare('email',$this->pesquisar,true,'OR');

		$criteria->compare('password',$this->pesquisar,true,'OR');

		$criteria->compare('data_cadastro',$this->pesquisar,true,'OR');

		$criteria->compare('ultima_visita',$this->pesquisar,true,'OR');

		$criteria->compare('tema',$this->pesquisar,true,'OR');

		$criteria->compare('status',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}