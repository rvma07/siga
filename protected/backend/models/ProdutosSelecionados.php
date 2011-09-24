<?php

/**
 * This is the model class for table "produtos_selecionados".
 *
 * The followings are the available columns in table 'produtos_selecionados':
 * @property string $id_produtos
 * @property string $id_relacionado
 */
class ProdutosSelecionados extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ProdutosSelecionados the static model class
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
		return 'produtos_selecionados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_produtos, id_relacionado', 'required'),
			array('id_produtos, id_relacionado', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_produtos, id_relacionado', 'safe', 'on'=>'search'),
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
			'idProdutos0' => array(self::BELONGS_TO, 'Produtos', 'id_produtos'),
			'idRelacionado0' => array(self::BELONGS_TO, 'Produtos', 'id_relacionado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_produtos' => 'Id Produtos',
			'id_relacionado' => 'Id Relacionado',
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
                        		$criteria->compare('id_produtos',$this->id_produtos,true);

		$criteria->compare('id_relacionado',$this->id_relacionado,true);

                }else{
            
                       		$criteria->compare('id_produtos',$this->pesquisar,true,'OR');

		$criteria->compare('id_relacionado',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}