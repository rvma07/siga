<?php

/**
 * This is the model class for table "secoes".
 *
 * The followings are the available columns in table 'secoes':
 * @property string $id
 * @property string $nome
 * @property string $slug
 */
class Secoes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Secoes the static model class
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
		return 'secoes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, slug', 'required'),
			array('nome, slug', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, slug', 'safe', 'on'=>'search'),
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
			'categorias' => array(self::MANY_MANY, 'Categoria', 'secoes_has_categoria(secoes_id, categoria_id)'),
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
			'slug' => 'Slug',
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

		$criteria->compare('slug',$this->slug,true);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('nome',$this->pesquisar,true,'OR');

		$criteria->compare('slug',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}