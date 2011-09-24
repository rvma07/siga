<?php

/**
 * This is the model class for table "itens_das_compras".
 *
 * The followings are the available columns in table 'itens_das_compras':
 * @property string $compra_id
 * @property string $produtos_id
 * @property integer $quantidade
 * @property string $preco_unitario
 */
class ItensDasCompras extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ItensDasCompras the static model class
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
		return 'itens_das_compras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('compra_id, produtos_id, quantidade, preco_unitario', 'required'),
			array('quantidade', 'numerical', 'integerOnly'=>true),
			array('compra_id, produtos_id, preco_unitario', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('compra_id, produtos_id, quantidade, preco_unitario', 'safe', 'on'=>'search'),
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
			'compra_id' => 'Compra',
			'produtos_id' => 'Produtos',
			'quantidade' => 'Quantidade',
			'preco_unitario' => 'Preco Unitario',
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
                        		$criteria->compare('compra_id',$this->compra_id,true);

		$criteria->compare('produtos_id',$this->produtos_id,true);

		$criteria->compare('quantidade',$this->quantidade);

		$criteria->compare('preco_unitario',$this->preco_unitario,true);

                }else{
            
                       		$criteria->compare('compra_id',$this->pesquisar,true,'OR');

		$criteria->compare('produtos_id',$this->pesquisar,true,'OR');

		$criteria->compare('quantidade',$this->pesquisar,true,'OR');

		$criteria->compare('preco_unitario',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}