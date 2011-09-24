<?php

/**
 * This is the model class for table "jogos".
 *
 * The followings are the available columns in table 'jogos':
 * @property string $id
 * @property string $nome
 * @property string $detalhes
 * @property string $foto
 * @property string $embed
 * @property string $id_categoria
 */
class Jogos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Jogos the static model class
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
		return 'jogos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, detalhes, embed, id_categoria', 'required'),
			array('nome, foto', 'length', 'max'=>50),
			array('detalhes', 'length', 'max'=>150),
			array('id_categoria', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, detalhes, foto, embed, id_categoria', 'safe', 'on'=>'search'),
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
			'idCategoria0' => array(self::BELONGS_TO, 'Categoria', 'id_categoria'),
			'produtoses' => array(self::MANY_MANY, 'Produtos', 'produtos_jogo_relacionado(produtos_id, jogos_id)'),
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
			'detalhes' => 'Detalhes',
			'foto' => 'Foto',
			'embed' => 'Embed',
			'id_categoria' => 'Id Categoria',
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

		$criteria->compare('detalhes',$this->detalhes,true);

		$criteria->compare('foto',$this->foto,true);

		$criteria->compare('embed',$this->embed,true);

		$criteria->compare('id_categoria',$this->id_categoria,true);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('nome',$this->pesquisar,true,'OR');

		$criteria->compare('detalhes',$this->pesquisar,true,'OR');

		$criteria->compare('foto',$this->pesquisar,true,'OR');

		$criteria->compare('embed',$this->pesquisar,true,'OR');

		$criteria->compare('id_categoria',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}