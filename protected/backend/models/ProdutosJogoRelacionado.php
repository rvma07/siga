<?php

/**
 * This is the model class for table "produtos_jogo_relacionado".
 *
 * The followings are the available columns in table 'produtos_jogo_relacionado':
 * @property string $produtos_id
 * @property string $jogos_id
 */
class ProdutosJogoRelacionado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ProdutosJogoRelacionado the static model class
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
		return 'produtos_jogo_relacionado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('produtos_id, jogos_id', 'required'),
			array('produtos_id, jogos_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('produtos_id, jogos_id', 'safe', 'on'=>'search'),
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
			'produtos_id' => 'Produtos',
			'jogos_id' => 'Jogos',
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
                        		$criteria->compare('produtos_id',$this->produtos_id,true);

		$criteria->compare('jogos_id',$this->jogos_id,true);

                }else{
            
                       		$criteria->compare('produtos_id',$this->pesquisar,true,'OR');

		$criteria->compare('jogos_id',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}