<?php

/**
 * This is the model class for table "categoria".
 *
 * The followings are the available columns in table 'categoria':
 * @property string $id
 * @property string $descricao
 * @property string $id_pai
 * @property integer $ativo
 */
class Categoria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Categoria the static model class
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
		return 'categoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao', 'required'),
			array('ativo', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>50),
			array('id_pai', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, id_pai, ativo', 'safe', 'on'=>'search'),
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
			'idPai0' => array(self::BELONGS_TO, 'Categoria', 'id_pai'),
			'categorias' => array(self::HAS_MANY, 'Categoria', 'id_pai'),
			'jogoses' => array(self::HAS_MANY, 'Jogos', 'id_categoria'),
			'produtoses' => array(self::HAS_MANY, 'Produtos', 'id_categoria'),
			'secoes' => array(self::MANY_MANY, 'Secoes', 'secoes_has_categoria(secoes_id, categoria_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descricao' => 'Descricao',
			'id_pai' => 'Id Pai',
			'ativo' => 'Ativo',
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

		$criteria->compare('descricao',$this->descricao,true);

		$criteria->compare('id_pai',$this->id_pai,true);

		$criteria->compare('ativo',$this->ativo);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('descricao',$this->pesquisar,true,'OR');

		$criteria->compare('id_pai',$this->pesquisar,true,'OR');

		$criteria->compare('ativo',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}