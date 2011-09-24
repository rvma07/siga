<?php

/**
 * This is the model class for table "compra".
 *
 * The followings are the available columns in table 'compra':
 * @property string $id
 * @property string $tipo_frete
 * @property string $valor_frete
 * @property string $data_transacao
 * @property string $anotacao
 * @property string $id_transaction
 * @property string $taxas_extras
 * @property string $tipo_pagamento
 * @property string $status_transacao
 * @property integer $parcelas
 * @property string $usuarios_id
 */
class Compra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Compra the static model class
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
		return 'compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_frete, valor_frete, data_transacao, usuarios_id', 'required'),
			array('parcelas', 'numerical', 'integerOnly'=>true),
			array('tipo_frete', 'length', 'max'=>2),
			array('valor_frete, taxas_extras, usuarios_id', 'length', 'max'=>10),
			array('anotacao', 'length', 'max'=>250),
			array('id_transaction', 'length', 'max'=>32),
			array('tipo_pagamento, status_transacao', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipo_frete, valor_frete, data_transacao, anotacao, id_transaction, taxas_extras, tipo_pagamento, status_transacao, parcelas, usuarios_id', 'safe', 'on'=>'search'),
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
			'usuarios' => array(self::BELONGS_TO, 'Usuarios', 'usuarios_id'),
			'produtoses' => array(self::MANY_MANY, 'Produtos', 'itens_das_compras(compra_id, produtos_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo_frete' => 'Tipo Frete',
			'valor_frete' => 'Valor Frete',
			'data_transacao' => 'Data Transacao',
			'anotacao' => 'Anotacao',
			'id_transaction' => 'Id Transaction',
			'taxas_extras' => 'Taxas Extras',
			'tipo_pagamento' => 'Tipo Pagamento',
			'status_transacao' => 'Status Transacao',
			'parcelas' => 'Parcelas',
			'usuarios_id' => 'Usuarios',
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

		$criteria->compare('tipo_frete',$this->tipo_frete,true);

		$criteria->compare('valor_frete',$this->valor_frete,true);

		$criteria->compare('data_transacao',$this->data_transacao,true);

		$criteria->compare('anotacao',$this->anotacao,true);

		$criteria->compare('id_transaction',$this->id_transaction,true);

		$criteria->compare('taxas_extras',$this->taxas_extras,true);

		$criteria->compare('tipo_pagamento',$this->tipo_pagamento,true);

		$criteria->compare('status_transacao',$this->status_transacao,true);

		$criteria->compare('parcelas',$this->parcelas);

		$criteria->compare('usuarios_id',$this->usuarios_id,true);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('tipo_frete',$this->pesquisar,true,'OR');

		$criteria->compare('valor_frete',$this->pesquisar,true,'OR');

		$criteria->compare('data_transacao',$this->pesquisar,true,'OR');

		$criteria->compare('anotacao',$this->pesquisar,true,'OR');

		$criteria->compare('id_transaction',$this->pesquisar,true,'OR');

		$criteria->compare('taxas_extras',$this->pesquisar,true,'OR');

		$criteria->compare('tipo_pagamento',$this->pesquisar,true,'OR');

		$criteria->compare('status_transacao',$this->pesquisar,true,'OR');

		$criteria->compare('parcelas',$this->pesquisar,true,'OR');

		$criteria->compare('usuarios_id',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}